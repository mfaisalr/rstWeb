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
                    <span>Antrian Poliklinik</span>
                </div>
            </div>
        </div>
        
    </div>
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Informasi Ketersediaan</div>
                <h1>Antrian Poliklinik</h1>
                <div class="h-decor"></div>
            </div>

            <div class="timeline-wrap">
                @foreach ($data as $poli)
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="poli-title">{{ $poli->name }}</div>
                            <div class="poli-info">
                                <span class="badge antrian">Antrian: {{ $poli->total_antrian }}</span>
                                <span class="badge dilayani">Dilayani: {{ $poli->total_dilayani }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
<style>
.timeline-wrap {
    border-left: 2px solid #49b0c1;
    margin: 0 auto;
    padding-left: 20px;
    max-width: 600px; /* <= kecilkan lebar di sini */
}

.timeline-item {
    position: relative;
    padding-left: 10px;
    margin-bottom: 20px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
}

.timeline-dot {
    width: 12px;
    height: 12px;
    background: #49b0c1;
    border-radius: 50%;
    position: absolute;
    left: -7px;
    top: 4px;
}

.timeline-content {
    background: #f9f9f9;
    padding: 12px 16px;
    border-radius: 6px;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.poli-title {
    font-weight: 600;
    margin-bottom: 6px;
    color: #2d2d2d;
}

.poli-info .badge {
    font-size: 12px;
    font-weight: 500;
    padding: 4px 8px;
    border-radius: 12px;
    margin-right: 6px;
}

.badge.antrian {
    background-color: #ffc107;
    color: #212529;
}

.badge.dilayani {
    background-color: #28a745;
    color: #fff;
}
</style>

            </div>


        </div>
    </div>
</div>

@endsection
