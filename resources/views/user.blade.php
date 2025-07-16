@extends('layouts.layoutUser')
@section('content')

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
								<img src="img/hospital/patient.svg" alt="Patients">
								<p>Total Data</p>
								<h2>{{ $patientCount }}</h2>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Appointments" />
								<p>Temu Janji</p>
								<h2>{{ $futureAppointmentsCount }}</h2>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Operations" />
								<p>Temu Janji Selesai</p>
								<h2>{{ $completedAppointmentsCount }}</h2>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Doctors" />
								<p>Temu Janji Pending</p>
								<h2>{{ $pendingAppointmentsCount }}</h2>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
			</div>
@endsection