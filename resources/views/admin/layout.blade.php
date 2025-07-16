<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="RST ADMIN WEB">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="../../../img/fav.png" />

		<!-- Title -->
		<title>RST ADMIN WEB</title>

		<!-- Bootstrap css -->
		<link rel="stylesheet" href="../../../css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="../../../fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="../../../css/main.css">

        <link rel="stylesheet" href="../../../vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="../../../vendor/datatables/dataTables.bs4-custom.css" />

	</head>
	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class='spinner-wrapper'>
				<div class='spinner'>
					<div class='inner'></div>
				</div>
				<div class='spinner'>
					<div class='inner'></div>
				</div>
				<div class='spinner'>
					<div class='inner'></div>
				</div>
				<div class='spinner'>
					<div class='inner'></div>
				</div>
				<div class='spinner'>
					<div class='inner'></div>
				</div>
				<div class='spinner'>
					<div class='inner'></div>
				</div>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- Header start -->
		<header class="header">
			<div class="container-fluid">

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
						<a href="index.html" class="logo">RS TK.II DR. R. HARDJANTO </a>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

						<!-- Header actions start -->
						<ul class="header-actions">
							
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">{{ Auth::user()->name }}</span>
									<span class="avatar">NR<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user11.png" alt="Royal Hospitals Admin Template" />
											</div>
											<h5>{{ Auth::user()->name }}</h5>
											<p>{{ Auth::user()->role }}</p>
										</div>
										<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="icon-log-out1"></i> Sign Out
                                        </a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</div>
				<!-- Row end -->

			</div>
		</header>
		<!-- Header end -->

		<div class="container-fluid p-0">

			<!-- Navigation start -->
			<nav class="navbar navbar-expand-lg custom-navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar" aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
                        <li class="nav-item">
						<a class="nav-link {{ request()->is('admin') ? 'active-page' : '' }}" href="{{ url('admin') }}">
						    <i class="icon-devices_other nav-icon"></i>
						    Dashboard
						</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ request()->is('admin/polikliniks*') ? 'active-page' : '' }}" href="#" id="Poliklinik" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-photo nav-icon"></i>
								Poliklinik
							</a>
							<ul class="dropdown-menu" aria-labelledby="Poliklinik">
								<li>
									<a class="dropdown-item {{ request()->is('admin/polikliniks') ? 'active-page' : '' }}" href="{{ route('polikliniks.index') }}">Poliklinik List</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/polikliniks/create') ? 'active-page' : '' }}" href="{{ route('polikliniks.create') }}">Tambah Poliklinik</a>
								</li>
							</ul>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ request()->is('admin/dokters*') ? 'active-page' : '' }}" href="#" id="doctoRs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Dokter
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item {{ request()->is('admin/dokters') ? 'active-page' : '' }}" href="{{ route('dokters.index') }}">Dokter List</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/dokters/create') ? 'active-page' : '' }}" href="{{ route('dokters.create') }}">Tambah Dokter</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/doctors_schedules') ? 'active-page' : '' }}" href="{{ route('doctors_schedules.index') }}">Jadwal Dokter</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/doctors_schedules/create') ? 'active-page' : '' }}" href="{{ route('doctors_schedules.create') }}">Tambah Jadwal Dokter</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ request()->is('admin/rooms*') ? 'active-page' : '' }}" href="#" id="Information" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-assignment nav-icon"></i>
								Informasi
							</a>
							<ul class="dropdown-menu" aria-labelledby="Information">
								<li>
									<a class="dropdown-item {{ request()->is('admin/rooms') ? 'active-page' : '' }}" href="{{ route('rooms.index') }}">Informasi Kamar</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/rooms/create') ? 'active-page' : '' }}" href="{{ route('rooms.create') }}">Tambah Kamar</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/activity_plans') ? 'active-page' : '' }}" href="{{ route('activity_plans.index') }}">Rencana Kegiatan</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/activity_plans/create') ? 'active-page' : '' }}" href="{{ route('activity_plans.create') }}">Tambah Rencana</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/latest_infos') ? 'active-page' : '' }}" href="{{ route('latest_infos.index') }}">Informasi Terkini</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/latest_infos/create') ? 'active-page' : '' }}" href="{{ route('latest_infos.create') }}">Tambah Informasi </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ request()->is('admin/albums*') ? 'active-page' : '' }}" href="#" id="Galeri" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-photo nav-icon"></i>
								Galeri
							</a>
							<ul class="dropdown-menu" aria-labelledby="Galeri">
								<li>
									<a class="dropdown-item {{ request()->is('admin/albums') ? 'active-page' : '' }}" href="{{ route('albums.index') }}">Album</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/albums/create') ? 'active-page' : '' }}" href="{{ route('albums.create') }}">Tambah Album</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ request()->is('admin/reports*') ? 'active-page' : '' }}" href="#" id="Data" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-folder nav-icon"></i>
								Data Wbs
							</a>
							<ul class="dropdown-menu" aria-labelledby="Data">
								<li>
									<a class="dropdown-item {{ request()->is('admin/reports') ? 'active-page' : '' }}" href="{{ route('reports.index') }}">Pelaporan</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('admin/reports/create') ? 'active-page' : '' }}" href="{{ route('reports.create') }}">Tambah Laporan</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ request()->is('admin/patients*') ? 'active-page' : '' }}" href="#" id="Patients" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-user nav-icon"></i>
								Pasien
							</a>
							<ul class="dropdown-menu" aria-labelledby="Patients">
								<li>
									<a class="dropdown-item {{ request()->is('admin/patients') ? 'active-page' : '' }}" href="{{ route('admin.patients.index') }}">List Pasien</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->

        @yield('content')
        

			<footer class="main-footer">© RST 2025</footer>

		</div>

		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="../../../js/jquery.min.js"></script>
		<script src="../../../js/bootstrap.bundle.min.js"></script>
		<script src="../../../js/moment.js"></script>

		<!-- Data Tables -->
		<script src="../../../vendor/datatables/dataTables.min.js"></script>
		<script src="../../../vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="../../../vendor/datatables/custom/custom-datatables.js"></script>

		<!-- Main Js Required -->
		<script src="../../../js/main.js"></script>

	</body>
</html>
