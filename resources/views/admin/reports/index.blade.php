@extends('admin.layout')

@section('content')
<div class="main-container">

	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">WBS</li>
			<li class="breadcrumb-item active">WBS List</li>
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
                <th>Email</th>
                <th>Nama Panjang</th>
                <th>Unit Kerja</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Laporan</th>
                <th>Foto pendukung</th>
                <th>Detail</th>
                <th>Tggl Pengaduan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $report->email }}</td>
                    <td>{{ $report->full_name }}</td>
                    <td>{{ $report->work_unit }}</td>
                    <td>{{ $report->phone_number }}</td>
                    <td>{{ $report->address }}</td>
                    <td>{{ Str::limit($report->report, 50) }}</td>
                    <td>
                        @if ($report->supporting_photo)
                            <img src="{{ asset('storage/' . $report->supporting_photo) }}" alt="Supporting Photo" width="100">
                        @else
                            Foto Kosong
                        @endif
                    </td>
                    <td>{{ $report->reportDetail }}</td>
                    <td>{{ $report->created_at }}</td>
                    <td>
                        {{-- Edit button --}}
                        <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-info btn-sm">Edit</a>
                        
                        {{-- Delete button --}}
                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this report?')">Delete</button>
                        </form>
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
