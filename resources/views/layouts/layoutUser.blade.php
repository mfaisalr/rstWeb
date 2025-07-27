<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>RST ADMIN WEB</title>

		<!-- Bootstrap css -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="../../fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="../../css/main.css">
		

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
									<span class="avatar">USR<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
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
							<a class="nav-link {{ request()->is('user') ? 'active-page' : '' }}" href="{{ url('user') }}">
						    	<i class="icon-devices_other nav-icon"></i>
						    	Dashboard
							</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link {{ request()->is('user.patients') ? 'active-page' : '' }}" href="{{ route('patients.create') }}">
						    	<i class="icon-assignment nav-icon"></i>
						    	Registrasi Pasien
							</a>
						</li>
                        <!-- <li class="nav-item">
							<a class="nav-link {{ request()->is('user.patients') ? 'active-page' : '' }}" href="{{ route('patients.index') }}">
						    	<i class="icon-user nav-icon"></i>
						    	Data Pasien
							</a>
						</li> -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="Patients" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-folder nav-icon"></i>
								Pasien Temu Janji
							</a>
							<ul class="dropdown-menu" aria-labelledby="Patients">
								<li>
									<a class="dropdown-item {{ request()->is('user/upcomingPatients') ? 'active-page' : '' }}" href="{{ route('patients.upcomingPatients') }}">Pendaftaran Aktif</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('user/historyPatients') ? 'active-page' : '' }}" href="{{ route('patients.historyPatients') }}">Riwayat Pendaftaran</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->

            @yield("content");

			<footer class="main-footer">© RST 2025</footer>

		</div>

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/bootstrap.bundle.min.js"></script>
		<script src="../../js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Apex Charts -->
		<script src="../../vendor/apex/apexcharts.min.js"></script>
		<script src="../../vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
		<script src="../../vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
		<script src="../../vendor/apex/examples/bar/hospital-patients-by-age.js"></script>

		<!-- Rating JS -->
		<script src="../../vendor/rating/raty.js"></script>	
		<script src="../../vendor/rating/raty-custom.js"></script>		

		<!-- Main Js Required -->
		<script src="../../js/main.js"></script>

		

	</body>
</html>