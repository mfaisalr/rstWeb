@extends('layouts.layouts1')

@section('content')

<!--//header-->
<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="/">Beranda</a>
						<a href="#" style="pointer-events: none; text-decoration: none;">Informasi</a>
						<span>Rencana Kegiatan</span>
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
					<h1>Rencana Kegiatan</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH">
                @foreach ($activityPlans as $plan)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-card-photo">
                            </div>
                            <p class="theme-color">{{ \Carbon\Carbon::parse($plan->activity_date)->format('d F Y') }}</p>
                            <h5 class="service-card-name"><a href="{{ route('rencanakegiatan.detail', $plan->id) }}">{{ $plan->activity_name }}</a></h5>
                            <div class="h-decor"></div>
                            <p>{{ $plan->description }}</p>
                        </div>
                    </div>
                @endforeach
				</div>
			</div>
		</div>
		<!--//section-->
	</div>

@endsection