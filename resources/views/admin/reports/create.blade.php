@extends('admin.layout')

@section('content')
<div class="main-container">

	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">WBS</li>
			<li class="breadcrumb-item active">Tambah Data WBS</li>
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
					<div class="card-title">WBS Details</div>
				</div>
				<div class="card-body">

    <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" class="form-control" name="full_name" required>
        </div>

        <div class="form-group">
            <label for="work_unit">Work Unit:</label>
            <input type="text" class="form-control" name="work_unit" required>
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" name="phone_number" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" name="address" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="report">Report:</label>
            <textarea class="form-control" name="report" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="supporting_photo">Supporting Photo (Optional):</label>
            <input type="file" class="form-control" name="supporting_photo" accept="image/*">
        </div>

        <div class="form-group">
            <label for="reportDetail">Report Detail</label>
            <select name="reportDetail" id="reportDetail" class="form-control">
                <option value="corruption" {{ old('reportDetail', $report->reportDetail ?? '') == 'corruption' ? 'selected' : '' }}>Laporan Korupsi</option>
                <option value="gratification" {{ old('reportDetail', $report->reportDetail ?? '') == 'gratification' ? 'selected' : '' }}>Laporan Gratifikasi</option>
                <option value="conflict of interest" {{ old('reportDetail', $report->reportDetail ?? '') == 'conflict of interest' ? 'selected' : '' }}>Laporan Benturan Kepentingan</option>
            </select>
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
