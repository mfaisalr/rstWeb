@extends('admin.layout')

@section('content')
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Informasi</li>
            <li class="breadcrumb-item active">Informasi Kamar</li>
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
                                    <th>Nama Kamar</th>
                                    <th>Tempat Tidur Kosong</th>
                                    <th>Tempat Tidur Terisi</th>
                                    <th>Tanggal Update</th> 
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $room->name }}</td>
                                    <td>{{ $room->available_beds }}</td>
                                    <td>{{ $room->occupied_beds }}</td>
                                    <td>{{ $room->updated_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a class="btn btn-info btn-sm" href="{{ route('rooms.edit', $room->id) }}">
                                                <i class="icon-edit1"></i>
                                            </a>
                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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
