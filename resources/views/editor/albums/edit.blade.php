@extends('editor.layout')

@section('content')

<div class="main-container">
	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Galeri</li>
			<li class="breadcrumb-item">Album List</li>
			<li class="breadcrumb-item active">Edit Data Album</li>
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
						<div class="card-title">Album Details : {{ $album->title }}</div>
					</div>
					<div class="card-body">
                        <form action="{{ route('albums.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Judul:</label>
                                <input type="text" class="form-control" name="title" value="{{ $album->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi:</label>
                                <textarea class="form-control" name="description">{{ $album->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="media">Unggah Media Tambahan (gambar atau video):</label>
                                <input type="file" class="form-control-file" name="media[]" multiple accept="image/*,video/*">
                            </div>
								<button type="submit" class="btn btn-primary">Ubah Data</button>
                        </form>
                            <h3 class="mt-4">Current Media</h3>
                            <div class="row">
                                @foreach ($album->media as $media)
                                    <div class="col-md-4">
                                        <div class="media-item">
                                            @if ($media->type === 'photo')
                                                <img src="{{ asset('storage/' . $media->media_path) }}" class="img-fluid" alt="Photo">
                                            @elseif ($media->type === 'video')
                                                <video width="320" height="240" controls>
                                                    <source src="{{ asset('storage/' . $media->media_path) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif

                                            <form action="{{ route('media.destroy', $media->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure you want to delete this media?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        <a class="btn btn-primary mt-4" href="{{ route('albums.index') }}">Back to Albums</a>
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
