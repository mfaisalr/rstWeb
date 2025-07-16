@extends('layouts.layouts1')

@section('content')

<!--//header-->
<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="/" style="text-decoration: none;">Beranda</a>
						<a href="#" style="pointer-events: none; text-decoration: none;">Informasi</a>
						<span>Informasi Layanan</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->

		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">Informasi</div>
					<h1>Informasi Layanan</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container" >
				<div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="h3 font-weight-bold mb-3">Berikut Adalah Informasi Dari Layanan<br>RS TK. II Dr. R. Hardjanto</h2>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <p class="mb-0">
                        Dalam upaya membangun masyarakat yang sehat dan sejahtera, pemerintah menjadikan program kesehatan sebagai salah satu unggulan. Rumah sakit berperan penting dalam mendukung tujuan ini melalui pembenahan berkelanjutan dan pengembangan pelayanan yang inovatif dan ramah pasien.
                    </p>
                </div>
            </div>
        </div>
<br>
        <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
    
    <div class="col-md mb-3">
        <a href="{{ route('jadwaldokter') }}" class="counter-box-link">
            <div class="icn-text">
                <div class="icn-text-simple"><i class="icon-innovation"></i></div>
                <h5 class="icn-text-title">Jadwal Dokter</h5>
                <p>Lihat jadwal praktik dokter kami secara real-time untuk kenyamanan Anda.</p>
            </div>
        </a>
    </div>

    <div class="col-md mb-3">
        <a href="{{ route('infokamar') }}" class="counter-box-link">
            <div class="icn-text">
                <div class="icn-text-simple"><i class="icon-compassion"></i></div>
                <h5 class="icn-text-title">Informasi Kamar</h5>
                <p>Periksa ketersediaan kamar rawat inap dan fasilitas yang tersedia dengan cepat.</p>
            </div>
        </a>
    </div>

    <div class="col-md mb-3">
        <a href="{{ route('antrianpoliklinik') }}" class="counter-box-link">
            <div class="icn-text">
                <div class="icn-text-simple"><i class="icon-integrity"></i></div>
                <h5 class="icn-text-title">Antrian Poliklinik</h5>
                <p>Cek nomor antrian layanan poliklinik Anda untuk menghindari antre lama.</p>
            </div>
        </a>
    </div>


</div>
</div>

@endsection