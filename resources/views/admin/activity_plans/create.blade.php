@extends('admin.layout')

@section('content')
<div class="main-container">

<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Informasi</li>
        <li class="breadcrumb-item">Rencana Kegiatan</li>
        <li class="breadcrumb-item active">Tambah Data Rencana Kegiatan</li>
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
                <div class="card-title">Rencana Kegiatan Details</div>
            </div>
            <div class="card-body">
                <form action="{{ route('activity_plans.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="activity_date">Tanggal Kegiatan:</label>
                        <input type="date" class="form-control" name="activity_date" placeholder="Enter activity date" required>
                    </div>
                    <div class="form-group">
                        <label for="activity_name">Nama Kegiatan:</label>
                        <input type="text" class="form-control" name="activity_name" placeholder="Enter activity name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea class="form-control" name="description" placeholder="Enter description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="attached_file">File Terlampir:</label>
                        <input type="file" class="form-control-file" name="attached_file">
                    </div>
                    <div class="text-right">
						<button type="submit" class="btn btn-primary">Tambah Data</button>
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
