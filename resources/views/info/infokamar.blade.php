@extends('layouts.layouts1')

@section('content')

  
<div class="page-content">
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/" style="text-decoration: none;">Beranda</a>
                    <a href="#" style="pointer-events: none; text-decoration: none;">Informasi</a>
                    <a href="{{ route('infolayanan') }}" style="text-decoration: none;">Info Layanan</a>
                    <span>Info Kamar</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Informasi Ketersediaan</div>
                <h1>Info Kamar</h1>
                <div class="h-decor"></div>
            </div>

            <div class="row">
                @foreach ($rooms as $room)
                <div class="col-md-4 mb-4">
                    <div class="card card-custom highlight-card shadow-lg border-0 h-100 rounded-4 position-relative overflow-hidden">
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div class="mb-3">
                                <div class="icon-circle mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 24 24">
                                        <path d="M20 7h-1V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H4a2 2 0 0 0-2 2v10a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9a2 2 0 0 0-2-2zM7 5h10v2H7V5zm13 14H4v-2h16v2zm0-4H4v-6h16v6z"/>
                                    </svg>
                                </div>
                                <h5 class="card-title fw-bold fs-5">{{ $room->name }}</h5>
                                <p class="mb-1"><strong class="text-dark">Tempat Tidur Tersedia:</strong> {{ $room->available_beds }}</p>
                                <p><strong class="text-dark">Terisi:</strong> {{ $room->occupied_beds }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

<style>

    .card-custom:hover {
        background-color: #49b0c1 !important;
        color: #fff;
        transform: translateY(-5px);
    }

    .card-custom:hover h5,
    .card-custom:hover p {
        color: #fff;
    }

    .card-custom svg {
        transition: fill 0.3s;
    }

    .card-custom:hover svg {
        fill: #fff;
    }

    .card-custom {
        transition: all 0.4s ease;
        background: #ffffff;
        border-radius: 1rem;
    }

    .highlight-card:hover {
        background: linear-gradient(135deg, #49b0c1 0%, #28a7bc 100%);
        color: #fff;
        transform: scale(1.03);
    }

    .highlight-card:hover .card-title,
    .highlight-card:hover p,
    .highlight-card:hover svg {
        color: #fff !important;
        fill: #fff;
    }

    .icon-circle {
        width: 60px;
        height: 60px;
        background-color: #49b0c1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection
