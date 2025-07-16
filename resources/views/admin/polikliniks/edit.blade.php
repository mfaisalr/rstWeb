@extends('admin.layout')

@section('content')

    <div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Poliklinik</li>
						<li class="breadcrumb-item">Poliklinik List</li>
						<li class="breadcrumb-item active">Edit Data Poliklinik</li>
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
									<div class="card-title">Poliklinik Details</div>
								</div>
								<div class="card-body">
                                    <form action="{{ route('polikliniks.update', $poliklinik->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
										<div class="">
											<div class="form-group">
												<label for="name">Nama Poliklinik</label>
												<input type="text" class="form-control" name="name" id="name" value="{{ $poliklinik->name }}">
											</div>
										</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary">Ubah Data</button>
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
