<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Website resmi rst balikpapan</title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="color/color.css" rel="stylesheet">
<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places"></script>
</head>

<style>
	.counter-box-link 
	{
		display: block; 
		color: inherit; 
	}
	
	.counter-box-link:hover
	{
		text-decoration: none; 
	}

	.counter-box-link:hover .counter-box 
	{
    	background-color: #f5f5f5; 
    	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    	transition: 0.3s ease; 
	}
</style>

<body class="shop-page">
<!--header-->
<header class="header">
		<div class="header-mobile-info">
			<div class="header-mobile-info-content js-info-content">
				<ul class="icn-list-sm">
					<li><i class="icon-placeholder2"></i>Jl. Tanjungpura I, Klandasan Ulu, Balikpapan, Kalimantan Timur  76111
						<br> 
					</li>
					<li><i class="icon-telephone"></i><span class="text-nowrap">(0542) 414333</span></li>
					<li><i class="icon-black-envelope"></i><a href="mailto:rstbalikpapan@gmail.com">rstbalikpapan@gmail.com</a></li>
					<li><i class="icon-clock"></i>Senin - Jumat : 07.00 - 15.00
						<br> Sabtu - Minggu : Tutup</li>
				</ul>
			</div>
		</div>
		<div class="header-mobile-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-3">
						<div class="header-mobile-info-toggle js-info-toggle"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:1-847-555-5555">(0542) 414333</a></div>
						<div class="header-info"><i class="icon-placeholder2"></i>Jl. Tanjungpura I, Klandasan Ulu, Balikpapan, Kalimantan Timur  76111 </div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:rstbalikpapan@gmail.com">rstbalikpapan@gmail.com</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="index-2.html" class="header-logo"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        <!-- <h1 style= "font-size: 20px; margin-right: 20px;">RUMAH SAKIT <br> TK. II DR. R. HARDJANTO</h1> -->
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="/">Beranda</a>
										</li>
										<li class="nav-item">
											<a href="services.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Tentang</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
												<li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
												<li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi dan Misi</a></li>
												<li><a class="dropdown-item" href="{{ route('waktupelayanan') }}">Waktu Pelayanan</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="gallery.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Info</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{ route('rencanakegiatan') }}">Rencana Kegiatan</a></li>
												<li><a class="dropdown-item" href="{{ route('infoterkini') }}">Info Terkini</a></li>
												<li><a class="dropdown-item" href="{{ route('infolayanan') }}">Info Layanan</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="our-specialist.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Fasilitas</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{ route('fasilitaspelayanan') }}">Fasilitas Pelayanan</a></li>
												<li><a class="dropdown-item" href="{{ route('fasilitasinstalasi') }}">Fasilitas Instalasi</a></li>
												<li><a class="dropdown-item" href="{{ route('unggulan') }}">Unggulan</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('galeri') }}">Galeri</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('akreditasi') }}">Akreditasi</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('ppid') }}">PPID</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" href="{{ route('wbs') }}">WBS</a>
										</li>
                                      	<li class="nav-item">
											<a class="nav-link" href="{{ route('wbkwbbm') }}">WBK/WBBM</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('login') }}" style="color: #49b0c1;">Login</a>
										</li>
								</div>
							</nav>
						</div>
				</div>
			</div>
		</div>
	</header>
	<!--//header-->
	<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white" id="mainSlider" data-slick='{"arrows": true, "responsive":[{"breakpoint": 768,"settings":{"arrows": false, "dots": true }}]}'>
					<div class="slide">
						<div class="img--holder" data-animation="kenburns" data-bg="images/content/RST.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<br><b>Selamat Datang !</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Website RUMAH SAKIT TK. II DR. R. HARDJANTO kini hadir dengan penampilan baru yang semoga dapat lebih efektif dalam memberikan informasi.</div>
										<div class="slide-btn"><a href="{{ route('profile') }}" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-animation="kenburns" data-bg="images/content/RST2.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<br><b>Senyumku membawa kesembuhan untukmu.</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Mengembangkan berbagai inovasi untuk meningkatkan pelayanan kepada para pasien.</div>
										<div class="slide-btn"><a href="{{ route('profile') }}" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section slider-->
		<!--section welcome-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block">
						<img src="images/content/rstimg2.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-lg-6">
						<div class="title-wrap text-center text-lg-left mt-15 d-none d-md-block">
							<div class="h-sub">Selamat datang di web </div>
							<h2 class="h1">RS <span class="theme-color"> TK.II Dr. R. Hardjanto</span></h2>
						</div>
						<div class="row">
							<div class="d-lg-none col-8 col-sm-6 col-lg-5 mx-auto"><img src="images/content/rstimg2.jpg" alt="" class="img-fluid"></div>
							<div class="col-sm">
								<div class="title-wrap text-center text-lg-left mt-3 mt-sm-0 d-md-none">
									<div class="h-sub">Selamat datang di</div>
									<h2 class="h1"> <span class="theme-color"> TK.II Dr. R. Hardjanto</span></h2>
								</div>
								<div class="text-left mt-3 mt-sm-0">
									<p class="p-lg">Program kesehatan masyarakat menjadi andalan pemerintah dalam mewujudkan kesejahteraan masyarakat. Rumah sakit, sebagai garda terdepan dalam layanan kesehatan, 
													harus terus berinovasi untuk menghadapi tantangan dan memberikan pelayanan terbaik kepada pasien. RS Dr. R. Hardjanto sebagai rumah sakit pemerintah memiliki peran penting dalam mendukung masyarakat Balikpapan untuk hidup sehat dan bahagia. 
													Kami, jajaran direksi RS Dr. R. Hardjanto, memahami harapan masyarakat agar rumah sakit ini menjadi yang terbaik dalam memberikan pelayanan. Persiapan menuju akreditasi menjadi momentum bagi manajemen untuk melakukan perbaikan menyeluruh, mulai dari tampilan fisik, administrasi, hingga kualitas pelayanan.</p>
													<p>Kami menyadari bahwa upaya memenuhi harapan masyarakat tidak dapat dilakukan sendiri tanpa dukungan semua pihak. Sebagai lembaga pelayanan publik, kami berkomitmen untuk terus memberikan layanan terbaik demi memenuhi ekspektasi masyarakat Balikpapan.</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section welcome-->
		<!--section achieved-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Manajemen operasional layanan RS TK.II Dr. R. Hardjanto ?</div>
					<h2 class="h1">Layanan Operasional</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row d-block js-counter-carousel">
					<div class="col">
						<a href="{{ route('jadwaldokter') }}" class="counter-box-link">
							<div class="counter-box">
								<div class="counter-box-icon"><i class="icon-team"></i></div>
								<div class="decor"></div>
								<div class="counter-box-text">Jadwal Dokter</div>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="{{ route('infokamar') }}" class="counter-box-link">
							<div class="counter-box">
								<div class="counter-box-icon"><i class="icon-hand"></i></div>
								<div class="decor"></div>
								<div class="counter-box-text">Informasi Kamar</div>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="{{ route('antrianpoliklinik') }}" class="counter-box-link">
							<div class="counter-box">
								<div class="counter-box-icon"><i class="icon-man"></i></div>
								<div class="decor"></div>
								<div class="counter-box-text">Antrian Poli</div>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="{{ route('waktupelayanan') }}" class="counter-box-link">
							<div class="counter-box">
								<div class="counter-box-icon"><i class="icon-clock"></i></div>
								<div class="decor"></div>
								<div class="counter-box-text">Waktu Pelayanan</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--//section achieved-->

		<!-- Section Blog Posts -->
		<div class="section">
		    <div class="container">
		        <div class="title-wrap text-center">
		            <h2 class="h1">Instalasi Rawat Jalan</h2>
		            <div class="h-sub theme-color">
		                Berikut Instalasi Rawat Jalan yang tersedia di RS TK.II Dr. R. Hardjanto.
		            </div>
		            <div class="h-decor"></div>
		        </div>

		        <!-- Grid Start -->
		        <div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
		            @foreach ($schedules as $schedule)
		                <div class="col-md-6 col-lg-4 mb-4">
		                    <div class="blog-post border rounded shadow-sm p-3 h-100">
		                        <div class="blog-post-info">
		                            <h5 class="post-title">
		                                <a href="#">{{ $schedule->poliklinik->name }}</a>
		                            </h5>
		                        </div>
		                        <div class="post-teaser">
		                             {{ $schedule->poliklinik->name }} menyediakan layanan spesialis kesehatan.
		                            <br><strong>Dokter:</strong> {{ $schedule->doctor->name }}
		                            <br><strong>Hari:</strong> {{ $schedule->day_start }} - {{ $schedule->day_end }}
		                            <br><strong>Jam:</strong> {{ $schedule->time_start }} - {{ $schedule->time_end }}
		                        </div>
		                        <!-- <div class="mt-2">
		                            <a href="#" class="btn btn-sm btn-primary">
		                                <i class="icon-right-arrow"></i>
		                                <span>Read more</span>
		                                <i class="icon-right-arrow"></i>
		                            </a>
		                        </div> -->
		                    </div>
		                </div>
		            @endforeach
		        </div>
		        <!-- Grid End -->
		    </div>
		</div>
		<!-- //Section Blog Posts -->

		<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Fasilitas Pelayanan</h2>
					<div class="h-sub theme-color">Berikut Fasilitas Pelayanan yang tersedia di RS TK.II Dr. R. Hardjanto.</div>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/apotek.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Apotek</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/apotik.jpeg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Ruang Tunggu Poliklinik</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/loket.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Loket</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/poliklinik.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Poliklinik</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/parkir.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Parkiran</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href=""><img src="images/content/rawatinap.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="">Rawat Inap</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->
		
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Lihat perbedaannya</div>
					<h2 class="h1">Mengapa Memilih Kami?</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-medicine"></i></div>
							<div>
								<h5 class="icn-text-title">Standar operasi yang tinggi</h5>
								<p>Dokter bedah kami merupakan anggota badan akreditasi dokter bedah yang paling ketat dan diakui secara akademis, dan telah menyelesaikan pelatihan fellowship terakreditasi dengan standar mutu tinggi.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-team"></i></div>
							<div>
								<h5 class="icn-text-title">Tim Bedah yang Berkomitmen</h5>
								<p>Dokter bedah kami siap menangani berbagai jenis operasi, termasuk bedah umum, kanker, dan penyakit lainnya, untuk memenuhi kebutuhan kesehatan pasien.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-syringe"></i></div>
							<div>
								<h5 class="icn-text-title">Peralatan Modern</h5>
								<p>Rumah sakit kami menyediakan layanan bedah untuk berbagai kebutuhan medis, termasuk operasi umum, kanker, dan kondisi kesehatan lainnya, dengan dukungan tenaga medis yang profesional.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->

		<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Fasilitas Unggulan</h2>
					<div class="h-sub theme-color">Berikut Fasilitas Unggulan yang tersedia di RS TK.II Dr. R. Hardjanto.</div>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/mri.jpeg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">MRI 1,5 Tesla</a></h2>
								</div>
							</div>
							<div class="post-teaser">MRI 1,5 Tesla adalah alat pencitraan medis yang menggunakan medan magnet kuat sebesar 1,5 Tesla untuk menghasilkan gambar detail organ tubuh. Alat ini sering digunakan untuk mendiagnosis gangguan pada...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/usgscan.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">USG 4 Dimensi</a></h2>
								</div>
							</div>
							<div class="post-teaser">USG 4 Dimensi adalah teknologi ultrasonografi yang menghasilkan gambar bergerak secara real-time, menampilkan detail janin atau organ dalam dengan lebih jelas. Teknologi ini memungkinkan visualisasi wajah...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/ct.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Ct-Scan 160 Slice</a></h2>
								</div>
							</div>
							<div class="post-teaser">CT-Scan 160 Slice adalah teknologi pencitraan medis canggih yang menggunakan pemindai dengan 160 lapisan untuk menghasilkan gambar tubuh yang sangat detail dan akurat. Dengan kemampuan ini, alat tersebut...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/usgscan.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Radiologi</a></h2>
								</div>
							</div>
							<div class="post-teaser">Radiologi adalah cabang ilmu kedokteran yang menggunakan teknologi pencitraan medis seperti sinar-X, CT scan, MRI, dan USG untuk mendiagnosis dan mengobati penyakit. Teknologi ini membantu dokter melihat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->
		<br><br>
		
	</div>
	<!--footer-->
	<div class="footer mt-0">
		<div class="container">
			<div class="row py-1 py-md-2 px-lg-0">
				<div class="col-lg-4 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img src="images/footer-logo.png" alt="" class="img-fluid">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-lg-none">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">
							<div class="footer-text mt-1 mt-lg-2">
								<p>To receive email releases, simply provide
									<br>us with your email below</p>
								<form action="#" class="footer-subscribe">
									<div class="input-group">
										<input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email" />
										<span><i class="icon-black-envelope"></i></span>
									</div>
								</form>
							</div>
							<div class="footer-social d-none d-lg-block">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Blog Posts</h3>
					<div class="h-decor"></div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-03.jpg" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html">Medications & Oral Health</a></div>
							<p>September 26, 2018</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-01.jpg" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html">Smile For Your Health!</a></div>
							<p>August 22, 2018</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-02.jpg" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html">Tooth Fairy Traditions...</a></div>
							<p>July 25, 2018</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Our Contacts</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>Jl. Tanjungpura I, Klandasan Ulu, Balikpapan, Kalimantan Timur  76111 
							<br>
							<a href="https://maps.app.goo.gl/FHJMeD7NzfWmi5ih6" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">(0542) 414333 / FAX (0542) 415677</span></span></b>
							<br>(24/7 General inquiry)</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:rstbalikpapan@gmail.com">rstbalikpapan@gmail.com</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">Copyright © 2025 <a href="#">rstbalikpapan</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="#">Privacy Policy</a></div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>(0542) 414333</b></div>
				</div>
			</div>
		</div>
	</div>
	<!--//footer-->
	
	<!-- Vendors -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="vendor/cookie/jquery.cookie.js"></script>
	<script src="vendor/bootstrap-datetimepicker/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="vendor/waypoints/sticky.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/slick/slick.min.js"></script>
	<script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="vendor/countTo/jquery.countTo.js"></script>
	<script src="vendor/form-validation/jquery.form.js"></script>
	<script src="vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>

</body>

</html>