<?php

namespace App\Http\Controllers;

use App\Models\ActivityPlan;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DoctorsSchedule;
use App\Models\Dokter;
use App\Models\LatestInfo;
use App\Models\Poliklinik;
use App\Models\Patient;
use App\Models\Report;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function admin()
    {
        $poliklinik = Poliklinik::count();
        $doctor = Dokter::count();
        $album = Album::count();
        $report = Report::count();
        $room = Room::sum('occupied_beds');
        $patients = Patient::count();

        // Ambil data jumlah pasien per tanggal (misal 30 hari terakhir)
        $patientChartData = Patient::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Konversi data untuk chart
        $dates = $patientChartData->pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d'); // Bisa ubah ke format lain jika perlu
        });

        $counts = $patientChartData->pluck('count');

        $patientsPerPoliklinik = Patient::with('poliklinik')
            ->selectRaw('poliklinik_id, COUNT(*) as total')
            ->groupBy('poliklinik_id')
            ->get()
            ->map(function ($item) {
                return [
                    'name' => $item->poliklinik->name ?? 'Unknown',
                    'count' => $item->total
                ];
            });
        
        $poliklinikNames = $patientsPerPoliklinik->pluck('name');
        $poliklinikCounts = $patientsPerPoliklinik->pluck('count');

        // Batasan usia untuk setiap kelompok
        $ageGroups = [
            '0-4' => [0, 4],
            '5-9' => [5, 9],
            '10-14' => [10, 14],
            '15-19' => [15, 19],
            '20-24' => [20, 24],
            '25-29' => [25, 29],
            '30-34' => [30, 34],
            '35-39' => [35, 39],
            '40-44' => [40, 44],
            '45-49' => [45, 49],
            '50-54' => [50, 54],
            '55-59' => [55, 59],
            '60-64' => [60, 64],
            '65-69' => [65, 69],
            '70-74' => [70, 74],
            '75-79' => [75, 79],
            '80-84' => [80, 84],
            '85+'  => [85, 150],
        ];

        $maleData = [];
        $femaleData = [];
        $categories = [];

        foreach (array_reverse($ageGroups) as $label => [$min, $max]) {
            $maleCount = Patient::where('gender', 'Male')
                ->whereRaw("TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) BETWEEN ? AND ?", [$min, $max])
                ->count();
    
            $femaleCount = Patient::where('gender', 'Female')
                ->whereRaw("TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) BETWEEN ? AND ?", [$min, $max])
                ->count();
    
            $total = max(1, $maleCount + $femaleCount);
            $malePercent = round(($maleCount / $total) * 100, 1);
            $femalePercent = round(($femaleCount / $total) * 100, 1);
    
            $maleData[] = $malePercent;
            $femaleData[] = -$femalePercent;
            $categories[] = $label;
        }


        return view('admin', compact(
            'poliklinik', 'doctor', 'album', 'report', 'room', 'patients',
            'dates', 'counts', 'poliklinikNames', 'poliklinikCounts', 'maleData', 'femaleData', 'categories'
        ));
    }


    public function editor()
    {
        $latest_infos = LatestInfo::count();
        $activity_plan = ActivityPlan::count();
        $album = Album::count();

        return view('editor', compact(
            'latest_infos', 'activity_plan', 'album'
        ));
    }

    public function user()
{
    $patientCount = Patient::where('user_id', Auth::id())->count(); 

    $futureAppointmentsCount = Patient::where('user_id', Auth::id())
                                      ->where('examination_datetime', '>', now())
                                      ->where('status', '!=', 'Pending')
                                      ->count();

    $completedAppointmentsCount = Patient::where('user_id', Auth::id())
                                      ->where('examination_datetime', '<', now())
                                      ->count();

    $pendingAppointmentsCount = Patient::where('user_id', Auth::id())
                                      ->where('status', 'pending')
                                      ->count();

    return view('user', compact('patientCount', 'futureAppointmentsCount', 'completedAppointmentsCount', 'pendingAppointmentsCount'));
}

    public function index()
{
    $schedules = DoctorsSchedule::with('doctor', 'poliklinik')->get();
    return view('welcome', compact('schedules'));
}
}
