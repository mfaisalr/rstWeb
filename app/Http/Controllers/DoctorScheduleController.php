<?php

namespace App\Http\Controllers;

use App\Models\DoctorsSchedule;
use App\Models\Dokter;
use App\Models\Poliklinik;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    public function index()
    {
        $schedules = DoctorsSchedule::with(['doctor', 'poliklinik'])->get();

        return view('admin.doctors_schedules.index', compact('schedules'));
    }

    public function create()
    {
        $doctors = Dokter::all(); 
        $polikliniks = Poliklinik::all(); 
        return view('admin.doctors_schedules.create', compact('doctors', 'polikliniks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:dokters,id',
            'poliklinik_id' => 'required|exists:polikliniks,id',
            'day_start' => 'required|string|max:10',
            'day_end' => 'required|string|max:10',
            'time_start' => 'required|date_format:H:i',
            'time_end' => 'required|date_format:H:i|after:time_start',
        ]);

        DoctorsSchedule::create([
            'doctor_id' => $request->doctor_id,
            'poliklinik_id' => $request->poliklinik_id,
            'day_start' => $request->day_start,
            'day_end' => $request->day_end,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
        ]);

        return redirect()->route('doctors_schedules.index')->with('success', 'Jadwal Dokter berhasil ditambahkan.');
    }

    public function show(DoctorsSchedule $doctorSchedule)
    {
        return view('admin.doctors_schedules.show', compact('doctorSchedule'));
    }

    public function edit($id)
    {
        $schedule = DoctorsSchedule::findOrFail($id);
        $doctors = Dokter::all(); // Mengambil semua data dokter
        $polikliniks = Poliklinik::all(); // Mengambil semua data poliklinik

        return view('admin.doctors_schedules.edit', compact('schedule', 'doctors', 'polikliniks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required|exists:dokters,id',
            'poliklinik_id' => 'required|exists:polikliniks,id',
            'day_start' => 'required|string|max:10',
            'day_end' => 'required|string|max:10',
            'time_start' => 'required',
            'time_end' => 'required|after:time_start',
        ]);
        $schedule = DoctorsSchedule::findOrFail($id);
        $schedule->update([
            'doctor_id' => $request->doctor_id,
            'poliklinik_id' => $request->poliklinik_id,
            'day_start' => $request->day_start,
            'day_end' => $request->day_end,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
        ]);

        return redirect()->route('doctors_schedules.index')->with('success', 'Jadwal Dokter berhasil diubah.');
    }

    public function destroy(DoctorsSchedule $doctorSchedule)
    {
        $doctorSchedule->delete();

        return redirect()->route('doctors_schedules.index')->with('success', 'Jadwal Dokter berhasil dihapus.');
    }


    // Homepage
    public function indexHp()
    {
        $schedules = DoctorsSchedule::with(['doctor', 'poliklinik'])->get();

        return view('info.jadwaldokter', compact('schedules'));
    }
    
}
