@extends('editor.layout')

@section('content')
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Galeri</li>
            <li class="breadcrumb-item active">Album List</li>
        </ol>
    </div>
    <!-- Page header end -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-container">
                    <div class="table-responsive">
                        <table id="basicExample" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Total Media</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($albums as $album)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $album->title }}</td>
                                        <td>{{ $album->description }}</td>
                                        <td>{{ $album->media->count() }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a class="btn btn-primary btn-sm" href="{{ route('albums.show', $album->id) }}">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a class="btn btn-info btn-sm" href="{{ route('albums.edit', $album->id) }}">
                                                    <i class="icon-edit1"></i>
                                                </a>
                                                <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this album?')">
                                                        <i class="icon-cancel"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->

</div>
@endsection
