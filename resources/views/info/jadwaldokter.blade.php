@extends('layouts.layouts1')

@section('content')

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<div class="page-content">
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/" style="text-decoration: none;">Beranda</a>
                    <a href="#" style="pointer-events: none; text-decoration: none;">Informasi</a>
                    <a href="{{ route('infolayanan') }}" style="text-decoration: none;">Info Layanan</a>
                    <span>Jadwal Dokter</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-4">
                <div class="h-sub theme-color">Informasi Jadwal</div>
                <h1>Jadwal Dokter</h1>
                <div class="h-decor"></div>
            </div>

            @if($schedules->count())
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($schedules as $schedule)
				<div class="col-md-4 mb-4">
				    <div class="card card-custom shadow-lg border-0 h-100 rounded-4 position-relative overflow-hidden">
				        <div class="card-body d-flex flex-column justify-content-between p-4">
				            <div class="mb-3">
				                <div class="icon-circle bg-dark mb-3">
				                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 24 24">
				                        <path d="M12 2a4 4 0 0 1 4 4v2h-8V6a4 4 0 0 1 4-4zm-6 8h12a1 1 0 0 1 .995.9l1 10A1 1 0 0 1 18 22H6a1 1 0 0 1-.995-1.1l1-10A1 1 0 0 1 6 10zm6 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
				                    </svg>
				                </div>
				                <h5 class="card-title fw-bold fs-5 text-dark">{{ $schedule->doctor->name }}</h5>
				                <p class="mb-1"><strong class="text-dark">Poli:</strong> {{ $schedule->poliklinik->name }}</p>
				                <p class="mb-1"><strong class="text-dark">Hari:</strong> {{ $schedule->day_start }} - {{ $schedule->day_end }}</p>
				                <p><strong class="text-dark">Jam:</strong> {{ \Carbon\Carbon::parse($schedule->time_start)->format('H:i') }} - {{ \Carbon\Carbon::parse($schedule->time_end)->format('H:i') }} WIB</p>
				            </div>
				        </div>
				    </div>
				</div>
				@endforeach

            </div>
            @else
            <div class="alert alert-info text-center mt-4">
                Tidak ada jadwal dokter tersedia saat ini.
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
