@extends('admin.layout')

@section('content')
<div class="main-container">

	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Dokter</li>
			<li class="breadcrumb-item active">Dokter List</li>
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
							<th>Nama Dokter</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    @foreach ($dokters as $dokter)
						<tr>
                            <td>{{ $loop->iteration }}</td>
							<td>{{ $dokter->name }}</td>
							<td>
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info btn-sm" href="{{ route('dokters.edit', $dokter->id) }}">
                                        <i class="icon-edit1"></i>
                                    </a>
                                    <form action="{{ route('dokters.destroy', $dokter->id) }}" method="POST" style="display:inline;">
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