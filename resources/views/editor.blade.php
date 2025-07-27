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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
									<span class="avatar">EDT<span class="status busy"></span></span>
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
							<a class="nav-link {{ request()->is('editor') ? 'active-page' : '' }}" href="{{ url('editor') }}">
						    	<i class="icon-devices_other nav-icon"></i>
						    	Dashboard
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="Information" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-assignment nav-icon"></i>
								Rencana Kegiatan
							</a>
							<ul class="dropdown-menu" aria-labelledby="Information">
								<li>
									<a class="dropdown-item {{ request()->is('editor/activity_plans') ? 'active-page' : '' }}" href="{{ route('activity_plans.index') }}">Rencana Kegiatan List</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('editor/activity_plans/create') ? 'active-page' : '' }}" href="{{ route('activity_plans.create') }}">Tambah Rencana Kegiatan</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="Data" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-folder nav-icon"></i>
								Info Terbaru
							</a>
							<ul class="dropdown-menu" aria-labelledby="Data">
								<li>
									<a class="dropdown-item {{ request()->is('editor/latest_infos') ? 'active-page' : '' }}" href="{{ route('latest_infos.index') }}">Info Terbaru List</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('editor/latest_infos/create') ? 'active-page' : '' }}" href="{{ route('latest_infos.create') }}">Tambah Infor Terbaru</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="Galeri" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-photo nav-icon"></i>
								Galeri
							</a>
							<ul class="dropdown-menu" aria-labelledby="Galeri">
								<li>
									<a class="dropdown-item {{ request()->is('editor/albums') ? 'active-page' : '' }}" href="{{ route('albums.index') }}">Album</a>
								</li>
								<li>
									<a class="dropdown-item {{ request()->is('editor/albums/create') ? 'active-page' : '' }}" href="{{ route('albums.create') }}">Tambah Album</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->


			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">


				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				<!-- Page header end -->


				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Appointments" />
								<p>Rencana Kegiatan</p>
								<h2>{{ $activity_plan }}</h2>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/patient.svg" alt="Patients">
								<p>Info Terbaru</p>
								<h2>{{ $latest_infos }}</h2>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/operation.svg" alt="Operations" />
								<p>Galeri</p>
								<h2>{{ $album }}</h2>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="card">
								<div class="card-header d-flex justify-content-between align-items-center">
									<div class="card-title mb-0">Grafik Data Bulanan (Kegiatan, Info, Galeri)</div>
									<form method="GET">
										<select name="year" class="form-select form-select-sm" onchange="this.form.submit()">
											@foreach($years as $year)
												<option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>{{ $year }}</option>
											@endforeach
										</select>
									</form>
								</div>
								<div class="card-body">
									<div id="monthly-bar-chart" class="primary-graph"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->


			</div>
			<!-- *************
				************ Main container end *************
			************* -->

			<footer class="main-footer">© RST 2025</footer>

		</div>

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		
		<script src="vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
		<script src="vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
		<script src="vendor/apex/examples/bar/hospital-patients-by-age.js"></script>

		<!-- Rating JS -->
		<script src="vendor/rating/raty.js"></script>	
		<script src="vendor/rating/raty-custom.js"></script>		

		<!-- Main Js Required -->
		<script src="js/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		<script>
    		const ctx = document.getElementById('dataOverviewChart').getContext('2d');
    		const dataOverviewChart = new Chart(ctx, {
    		    type: 'bar',
    		    data: {
    		        labels: ['Rencana Kegiatan', 'Info Terbaru', 'Gallery'],
    		        datasets: [{
    		            label: 'Jumlah Data',
    		            data: [{{ $activity_plan }}, {{ $latest_infos }}, {{ $album }}],
    		            backgroundColor: [
    		                'rgba(54, 162, 235, 0.7)',
    		                'rgba(255, 206, 86, 0.7)',
    		                'rgba(75, 192, 192, 0.7)'
    		            ],
    		            borderColor: [
    		                'rgba(54, 162, 235, 1)',
    		                'rgba(255, 206, 86, 1)',
    		                'rgba(75, 192, 192, 1)'
    		            ],
    		            borderWidth: 1
    		        }]
    		    },
    		    options: {
    		        responsive: true,
    		        plugins: {
    		            legend: { display: false },
    		            tooltip: { enabled: true }
    		        },
    		        scales: {
    		            y: {
    		                beginAtZero: true,
    		                ticks: { precision: 0 }
    		            }
    		        }
    		    }
    		});
		</script>

		<script>
    const options = {
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                horizontal: false,
                endingShape: 'rounded',
                columnWidth: '45%',
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Rencana Kegiatan',
            data: @json($activityPlanData)
        }, {
            name: 'Info Terbaru',
            data: @json($latestInfoData)
        }, {
            name: 'Gallery',
            data: @json($albumData)
        }],
        xaxis: {
            categories: @json($labels),
        },
        yaxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + " data"
                }
            }
        },
        colors: ['#05668D', '#028090', '#00A896'],
    };

    const chart = new ApexCharts(document.querySelector("#monthly-bar-chart"), options);
    chart.render();
</script>
	</body>
</html>