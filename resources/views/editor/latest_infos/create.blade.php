@extends('editor.layout')

@section('content')
<div class="main-container">

	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Informasi</li>
			<li class="breadcrumb-item">Informasi Terkini</li>
			<li class="breadcrumb-item active">Tambah Data Informasi Terkini</li>
		</ol>
	</div>
	<!-- Page header end -->

	<!-- Content wrapper start -->
	<div class="content-wrapper">

	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
		</div>

		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Informasi Terkini Details</div>
				</div>
				<div class="card-body">
                    <form action="{{ route('latest_infos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('editor.latest_infos._form')
                        <div class="text-right">
							<button type="submit" class="btn btn-primary">Tambah Data</button>
                            <a href="{{ route('latest_infos.index') }}" class="btn btn-secondary">Cancel</a>
						</div>
                    </form>
                </div>
			</div>
		</div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
    </div>
    </div>
    <!-- Row end -->
    </div>
	<!-- Content wrapper end -->
</div>
@endsection
