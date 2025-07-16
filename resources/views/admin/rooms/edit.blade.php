@extends('admin.layout')

@section('content')

<div class="main-container">
	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Informasi</li>
			<li class="breadcrumb-item">Informasi Kamar List</li>
			<li class="breadcrumb-item active">Edit Data Kamar</li>
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
						<div class="card-title">Kamar Details</div>
					</div>
					<div class="card-body">
                        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama Kamar:</label>
                                <input type="text" class="form-control" name="name" value="{{ $room->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="available_beds">Tempat Tidur Kosong:</label>
                                <input type="number" class="form-control" name="available_beds" value="{{ $room->available_beds }}" required>
                            </div>
                            <div class="form-group">
                                <label for="occupied_beds">Tempat Tidur Terisi:</label>
                                <input type="number" class="form-control" name="occupied_beds" value="{{ $room->occupied_beds }}" required>
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
