<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Poliklinik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function adminIndex()
    {
        $patients = Patient::with('poliklinik')->get();
        return view('admin.patients.index', compact('patients'));
    }

    // Index method for User
    public function userIndex()
    {
        $patients = Patient::where('user_id', Auth::id())
                           ->orderBy('created_at', 'desc')
                           ->get();

        return view('user.patients.index', compact('patients'));
    }

    public function create()
    {
        $polikliniks = Poliklinik::all();
        return view('user.patients.create', compact('polikliniks'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'full_name' => 'required|string|max:255',
        'birth_date' => 'required|date',
        'gender' => 'required|string',
        'identity_number' => 'required|string',
        'address' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'nullable|email',
        'medical_history' => 'nullable|string',
        'allergies' => 'nullable|string',
        'medications' => 'nullable|string',
        'family_history' => 'nullable|string',
        'registration_date' => 'required|date',
        'registration_time' => 'required|date_format:H:i',
        'poliklinik_id' => 'required|exists:polikliniks,id',
        'job_status' => 'required|string',
        'insurance' => 'nullable|string',
        'insurance_policy_number' => 'nullable|string',
        'emergency_contact_name' => 'required|string',
        'emergency_contact_relationship' => 'required|string',
        'emergency_contact_phone' => 'required|string',
    ]);

    $validatedData['user_id'] = auth()->id();
    $validatedData['registration_date'] = now()->toDateString();
    $validatedData['registration_time'] = now()->toTimeString();
    $validatedData['status'] = 'Pending';
    Patient::create($validatedData);

    return redirect()->route('patients.index')->with('success', 'Registrasi pasien berhasil.');
}


    public function edit(Patient $patient)
    {
        $polikliniks = Poliklinik::all();
        return view('patients.edit', compact('patient', 'polikliniks'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|in:male,female',
            'identity_number' => 'required|string|max:255',
            'address' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'email' => 'nullable|email',
            'registration_date' => 'required|date',
            'registration_time' => 'required|time',
            'poliklinik_id' => 'required|exists:polikliniks,id',
            'job_status' => 'nullable|string|max:255',
            'insurance_company' => 'nullable|string|max:255',
            'insurance_policy_number' => 'nullable|string|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_relationship' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20',
        ]);

        $patient->update($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient data updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }

    public function acceptRegistration(Patient $patient)
{
    // Define working hours and slots
    $workingHoursStart = Carbon::createFromTime(8, 0); // 08:00 AM
    $workingHoursEnd = Carbon::createFromTime(14, 0); // 14:00 PM
    $slotDuration = 90; // 1.5 hours per slot
    $maxSlotsPerDay = 4; // Maximum of 4 slots per day

    // Start from tomorrow for slot checking
    $currentDate = Carbon::tomorrow()->setTimeFrom($workingHoursStart);

    // Check the next available slot starting from tomorrow for the selected Poli
    $nextAvailableSlot = $this->getNextAvailableSlot(
        $patient->poliklinik_id, 
        $currentDate, 
        $workingHoursStart, 
        $workingHoursEnd, 
        $slotDuration, 
        $maxSlotsPerDay
    );

    // Assign the next available slot to the patient
    $patient->examination_datetime = $nextAvailableSlot;
    $patient->update(['status' => 'Accepted']);
    $patient->save();

    return redirect()->back()->with('success', 'Patient registration accepted, and examination date/time has been scheduled.');
}

private function getNextAvailableSlot($poliklinikId, $currentDate, $workingHoursStart, $workingHoursEnd, $slotDuration, $maxSlotsPerDay)
{
    while (true) {
        // Skip weekends
        if ($currentDate->isSaturday() || $currentDate->isSunday()) {
            $currentDate->addDay()->setTimeFrom($workingHoursStart); // Move to next working day
            continue;
        }

        // Get all patients for the same Poli on the current day
        $scheduledPatients = Patient::where('poliklinik_id', $poliklinikId)
            ->whereDate('examination_datetime', $currentDate->toDateString())
            ->orderBy('examination_datetime')
            ->get();

        // Calculate the number of slots already taken for this Poli
        $filledSlots = $scheduledPatients->count();

        // If there are available slots, calculate the next available time
        if ($filledSlots < $maxSlotsPerDay) {
            $nextSlotTime = $workingHoursStart->copy()->addMinutes($filledSlots * $slotDuration);

            // Ensure the slot is within working hours
            if ($nextSlotTime->lessThanOrEqualTo($workingHoursEnd)) {
                return $currentDate->copy()->setTimeFrom($nextSlotTime);
            }
        }

        // If no slots are available for the current day, move to the next working day
        $currentDate->addDay()->setTimeFrom($workingHoursStart);
    }
}

public function reschedule(Request $request, $id)
{
    $request->validate([
        'new_date' => 'required|date|after_or_equal:today',
    ]);

    $patient = Patient::findOrFail($id);
    $poliklinikId = $patient->poliklinik_id;
    $newDate = Carbon::parse($request->new_date);

    // Define working hours and slot duration
    $workingHoursStart = Carbon::createFromTime(8, 0); // Start at 08:00 AM
    $workingHoursEnd = Carbon::createFromTime(14, 0); // End at 02:00 PM
    $slotDuration = 90; 

    $scheduledPatients = Patient::where('poliklinik_id', $poliklinikId)
        ->whereDate('examination_datetime', $newDate->toDateString())
        ->orderBy('examination_datetime')
        ->get();

    $filledSlots = $scheduledPatients->count();

    if ($filledSlots < 4) {
        $nextSlotTime = $workingHoursStart->copy()->addMinutes($filledSlots * $slotDuration);

        if ($nextSlotTime->greaterThan($workingHoursEnd)) {
            return back()->withErrors(['error' => 'No available slots on the selected date.']);
        }

        $patient->examination_datetime = $newDate->setTimeFrom($nextSlotTime);
        $patient->status = 'reschedule';
        $patient->save();

        return redirect()->back()->with('success', 'Patient rescheduled successfully.');
    } else {
        return back()->withErrors(['error' => 'All slots are fully booked for the selected date.']);
    }
} 

    public function show($id)
    {
        $patient = Patient::findOrFail($id); 
        return view('user.patients.show', compact('patient')); 
    }

    public function upcomingPatients()
    {
        $patients = Patient::where('user_id', Auth::id())->get();
    
        foreach ($patients as $patient) {
            if ($patient->examination_datetime && Carbon::parse($patient->examination_datetime)->isPast() && $patient->status != 'Completed') {
                $patient->status = 'Completed';
                $patient->save();
            }
        }
    
        $patients = Patient::where('user_id', Auth::id())
                           ->whereIn('status', ['Accepted', 'Rescheduled'])
                           ->where('examination_datetime', '>', now())
                           ->orderBy('examination_datetime')
                           ->get();
    
        return view('user.patients.upcomingPatients', compact('patients'));
    }

    public function historyPatients()
    {
        $patients = Patient::where('user_id', Auth::id())
                           ->where('examination_datetime', '<=', now())
                           ->orderBy('examination_datetime', 'desc')
                           ->get();

        return view('user.patients.historyPatients', compact('patients'));
    }

    public function antrianPoliklinik()
{
    $data = Poliklinik::withCount([
        'patients as total_antrian' => function ($query) {
            $query->whereIn('status', ['Pending', 'Accepted', 'Rescheduled']);
        },
        'patients as total_dilayani' => function ($query) {
            $query->where('status', 'Completed');
        },
    ])->get();

    return view('info.antrianpoliklinik', compact('data'));
}

    public function pendingPatients()
    {
        $patients = Patient::where('user_id', Auth::id())
                       ->where('status', 'Pending')
                       ->orderBy('examination_datetime', 'desc')
                       ->get();

        return view('user.patients.pendingPatients', compact('patients'));
    }

    public function requestCancelAppointment($id)
{
    $appointment = Patient::where('id', $id)
                          ->where('user_id', Auth::id())
                          ->first();

    if (!$appointment) {
        return redirect()->back()->with('error', 'Temu janji tidak ditemukan.');
    }

    if ($appointment->status !== 'Scheduled' && $appointment->status !== 'Pending') {
        return redirect()->back()->with('error', 'Temu janji tidak bisa dibatalkan.');
    }

    $appointment->status = 'Menunggu Persetujuan Pembatalan';
    $appointment->save();

    return redirect()->back()->with('success', 'Permintaan pembatalan dikirim ke admin.');
}

public function cancellationRequests()
{
    $requests = Patient::where('status', 'Menunggu Persetujuan Pembatalan')
                        ->orderBy('examination_datetime', 'desc')
                        ->get();

    return view('admin.cancellationRequests', compact('requests'));
}

public function approveCancellation($id)
{
    $appointment = Patient::findOrFail($id);
    $appointment->status = 'Cancelled';
    $appointment->save();

    return back()->with('success', 'Pembatalan disetujui.');
}

public function rejectCancellation($id)
{
    $appointment = Patient::findOrFail($id);
    $appointment->status = 'Pembatalan Ditolak';
    $appointment->save();

    return back()->with('success', 'Pembatalan ditolak.');
}

    public function cancelledPatients()
    {
        $patients = Patient::where('user_id', Auth::id())
                       ->where('status', 'cancelled')
                       ->orderBy('examination_datetime', 'desc')
                       ->get();

        return view('user.patients.cancelledPatients', compact('patients'));
    }



}