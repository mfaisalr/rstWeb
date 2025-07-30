@extends('layouts.layoutUser')
@section('content')

<style>
.tile-button {
	display: block;
	text-decoration: none;
	color: inherit;
	border-radius: 12px;
	transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.tile-button:hover {
	transform: translateY(-5px) scale(1.02);
	box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
	cursor: pointer;
}

/* Tambahan efek aktif saat diklik */
.tile-button:active {
	transform: scale(0.98);
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
	background-color: rgba(255, 255, 255, 0.6);
	filter: brightness(1.2);
}

</style>

		<div class="main-container">

			<div class="page-header">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>

			<div class="content-wrapper">
				<div class="row gutters">
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
						<a href="{{ route('patients.index') }}" class="tile-button">
							<div class="hospital-tiles">
								<img src="img/hospital/patient.svg" alt="Patients">
								<p>Total Data</p>
								<h2>{{ $patientCount }}</h2>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
						<a href="{{ route('patients.upcomingPatients') }}" class="tile-button">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Appointments" />
								<p>Temu Janji Sedang Berjalan</p>
								<h2>{{ $futureAppointmentsCount }}</h2>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
						<a href="{{ route('patients.pendingPatients') }}" class="tile-button">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Doctors" />
								<p>Menunggu Temu Janji</p>
								<h2>{{ $pendingAppointmentsCount }}</h2>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
						<a href="{{ route('patients.historyPatients') }}" class="tile-button">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Operations" />
								<p>Temu Janji Selesai</p>
								<h2>{{ $completedAppointmentsCount }}</h2>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
						<a href="{{ route('patients.cancelledPatients') }}" class="tile-button">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Operations" />
								<p>Batal Temu Janji</p>
								<h2>{{ $cancelledAppointmentsCount }}</h2>
							</div>
						</a>
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						<div class="card-title">Grafik Data Temu Janji</div>
					</div>
					<div class="card-body">
						<div id="basic-column-graph-datalables" class="primary-graph"></div>
					</div>
				</div>
			</div>

		</div>

		<script src="../../vendor/apex/apexcharts.min.js"></script>
		<script src="../../vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
		<script src="../../vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
		<script src="../../vendor/apex/examples/bar/hospital-patients-by-age.js"></script>

		<script>
	var options = {
		chart: {
			height: 350,
			type: 'bar',
		},
		plotOptions: {
			bar: {
				dataLabels: {
					position: 'top',
				},
			}
		},
		dataLabels: {
			enabled: true,
			formatter: function (val) {
				return val;
			},
			offsetY: -20,
			style: {
				fontSize: '12px',
				colors: ["#304758"]
			}
		},
		series: [{
			name: 'Jumlah Pasien',
			data: @json($monthlyPatientCounts)
		}],
		xaxis: {
			categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			position: 'top',
			labels: {
				offsetY: -18,
			},
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			},
			crosshairs: {
				fill: {
					type: 'gradient',
					gradient: {
						colorFrom: '#D8E3F0',
						colorTo: '#BED1E6',
						stops: [0, 100],
						opacityFrom: 0.4,
						opacityTo: 0.5,
					}
				}
			},
			tooltip: {
				enabled: true,
				offsetY: -35,
			}
		},
		fill: {
			gradient: {
				shade: 'light',
				type: "horizontal",
				shadeIntensity: 0.25,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [50, 0, 100, 100]
			},
		},
		yaxis: {
			labels: {
				show: true,
			}
		},
		title: {
			text: 'Jumlah Pasien Baru per Bulan',
			floating: true,
			offsetY: 320,
			align: 'center',
			style: {
				color: '#444'
			}
		},
		colors: ['#05668D']
	}
	var chart = new ApexCharts(
		document.querySelector("#basic-column-graph-datalables"),
		options
	);
	chart.render();
</script>

@endsection