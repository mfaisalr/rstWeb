@extends('editor.layout')

@section('content')
<div class="main-container">

	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Galeri</li>
			<li class="breadcrumb-item active">Tambah Data Album</li>
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
					<div class="card-title">Album Details</div>
				</div>
				<div class="card-body">
                    <form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="media">Unggah Media (gambar atau video):</label>
                            <input type="file" class="form-control-file" name="media[]" multiple accept="image/*,video/*">
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
