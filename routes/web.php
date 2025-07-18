<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController, PoliKlinikController, DokterController, DoctorScheduleController,
    RoomController, ActivityPlanController, LatestInfoController, AlbumController,
    ReportController, PatientController
};
use App\Models\Album;
use App\Models\DoctorsSchedule;
use App\Models\LatestInfo;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/galeri', [AlbumController::class, 'showGallery'])->name('galeri');
Route::get('/album/{id}', [AlbumController::class, 'viewAlbum'])->name('albums.view');
Route::get('info/rencanakegiatan', [ActivityPlanController::class, 'showActivityPlans'])->name('rencanakegiatan');
Route::get('info/rencanakegiatan/{id}', [ActivityPlanController::class, 'showDetailActivityPlan'])->name('rencanakegiatan.detail');
Route::get('info/infoterkini', [LatestInfoController::class, 'showLatestInfos'])->name('infoterkini');
Route::get('info/jadwaldokter', [DoctorScheduleController::class, 'indexHp'])->name('jadwaldokter');
Route::get('info/infokamar', [RoomController::class, 'infokamar'])->name('infokamar');
Route::get('info/antrianpoliklinik', [PatientController::class, 'antrianPoliklinik'])->name('antrianpoliklinik');

Route::view('/wbs', 'wbs')->name('wbs');
Route::get('/wbs', [ReportController::class, 'createKorupsi'])->name('wbs');
Route::post('/wbs', [ReportController::class, 'storeKorupsi'])->name('wbs');
Route::get('/wbs', [ReportController::class, 'createGratifikasi'])->name('wbs');
Route::post('/wbs', [ReportController::class, 'storeGratifikasi'])->name('wbs');
Route::get('/wbs', [ReportController::class, 'createBenturanKepentingan'])->name('wbs');
Route::post('/wbs', [ReportController::class, 'storeBenturanKepentingan'])->name('wbs');

Route::view('/ppid', 'ppid')->name('ppid');
Route::view('/wbkwbbm', 'wbkwbbm')->name('wbkwbbm');
Route::view('/akreditasi', 'akreditasi')->name('akreditasi');

// About Us Routes
Route::prefix('tentang_kami/detail')->group(function () {
    Route::view('/profile', 'profile')->name('profile');
    Route::view('/sejarah', 'sejarah')->name('sejarah');
    Route::view('/visimisi', 'visimisi')->name('visimisi');
    Route::view('/waktupelayanan', 'waktupelayanan')->name('waktupelayanan');
});

Route::prefix('info')->group(function () {
    Route::view('/infolayanan', 'info.infolayanan')->name('infolayanan');
});

Route::prefix('fasilitas')->group(function () {
    Route::view('/fasilitaspelayanan', 'fasilitas.fasilitaspelayanan')->name('fasilitaspelayanan');
    Route::view('/fasilitasinstalasi', 'fasilitas.fasilitasinstalasi')->name('fasilitasinstalasi');
    Route::view('/unggulan', 'fasilitas.unggulan')->name('unggulan');
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Routes
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'admin'])->name('admin');
        Route::resources([
            'polikliniks' => PoliKlinikController::class,
            'dokters' => DokterController::class,
            'doctors_schedules' => DoctorScheduleController::class,
            'rooms' => RoomController::class,
            'activity_plans' => ActivityPlanController::class,
            'reports' => ReportController::class,
            'patients' => PatientController::class,
        ]);
        Route::get('/patients', [PatientController::class, 'adminIndex'])->name('admin.patients.index');
        Route::post('/patients/{patient}/accept', [PatientController::class, 'acceptRegistration'])->name('patients.accept-registration');
        Route::patch('/patients/{patient}/reschedule', [PatientController::class, 'reschedule'])->name('patients.reschedule');
    });

    // Editor Routes
    Route::middleware('role:editor')->prefix('editor')->group(function () {
        Route::get('/', [HomeController::class, 'editor'])->name('editor');

        Route::prefix('activity_plans')->name('activity_plans.')->group(function () {
            Route::get('/', [ActivityPlanController::class, 'indexEditor'])->name('index');
            Route::get('/create', [ActivityPlanController::class, 'createEditor'])->name('create');
            Route::post('/', [ActivityPlanController::class, 'storeEditor'])->name('store');
            Route::get('/{activityPlan}', [ActivityPlanController::class, 'showEditor'])->name('show');
            Route::get('/{activityPlan}/edit', [ActivityPlanController::class, 'editEditor'])->name('edit');
            Route::put('/{activityPlan}', [ActivityPlanController::class, 'updateEditor'])->name('update');
            Route::delete('/{activityPlan}', [ActivityPlanController::class, 'destroyEditor'])->name('destroy');
        });

        Route::resources([
            'latest_infos' => LatestInfoController::class,
            'albums' => AlbumController::class,
        ]);
        Route::delete('media/{id}', [AlbumController::class, 'deleteMedia'])->name('media.destroy');
    });

    // User Routes
    Route::middleware('role:user')->prefix('user')->group(function () {
        Route::get('/', [HomeController::class, 'user'])->name('user');
        Route::get('/patients', [PatientController::class, 'userIndex'])->name('patients.index');
        Route::get('/patients/upcomingPatients', [PatientController::class, 'upcomingPatients'])->name('patients.upcomingPatients');
        Route::get('/patients/historyPatients', [PatientController::class, 'historyPatients'])->name('patients.historyPatients');
        Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
        Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
        Route::get('/patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
    });
});

// Auth Routes
require __DIR__.'/auth.php';
