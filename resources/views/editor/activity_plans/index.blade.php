@extends('editor.layout')

@section('content')
<div class="main-container">

	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Informasi</li>
			<li class="breadcrumb-item active">Rencana Kegiatan List</li>
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
                            <th>Tggl Kegiatan</th>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi</th>
                            <th>File Terlampir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activityPlans->take(5) as $activityPlan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $activityPlan->activity_date }}</td>
                                <td>{{ $activityPlan->activity_name }}</td>
                                <td>{{ $activityPlan->description }}</td>
                                <td>
                                    @if($activityPlan->attached_file)
                                        <a href="{{ Storage::url($activityPlan->attached_file) }}" target="_blank">View File</a>
                                    @else
                                        file kosong
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a class="btn btn-info btn-sm" href="{{ route('activity_plans.edit', $activityPlan->id) }}">
                                            <i class="icon-edit1"></i>
                                        </a>
                                        <form action="{{ route('activity_plans.destroy', $activityPlan->id) }}" method="POST" style="display:inline;">
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
