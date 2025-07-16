@extends('admin.layout')

@section('content')
<div class="main-container">
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Patients</li>
            <li class="breadcrumb-item active">Patient Details</li>
        </ol>
    </div>
    <!-- Page header end -->

    <!-- Reschedule Modal -->
<div class="modal fade" id="rescheduleModal-{{ $patient->id }}" tabindex="-1" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('patients.reschedule', $patient->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="rescheduleModalLabel">Reschedule Patient</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="new_date" class="form-label">Select New Date</label>
                        <input type="date" name="new_date" id="new_date" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Reschedule</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <!-- Patient Details -->
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">Patient Information</div>
                    <div class="card-body">
                        <p><strong>Full Name: </strong> {{ $patient->full_name }}</p>
                        <p><strong>Registration Date: </strong> {{ $patient->registration_date }}</p>
                        <p><strong>Registration Time: </strong> {{ $patient->registration_time }}</p>
                        <p><strong>Poliklinik: </strong> {{ $patient->poliklinik->name }}</p>
                        <!-- Examination Schedule -->
                        <p><strong>Examination Schedule: </strong> {{ $patient->examination_datetime ? $patient->examination_datetime->format('l, d M Y H:i') : 'Not Scheduled' }}</p> <!-- Add the p element here -->
                        <p><strong>Status: </strong> {{ $patient->status }}</p>

                        <!-- Accept Registration Button -->
                        <form action="{{ route('admin.accept-registration', $patient->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Accept Registration</button>
                        </form>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#rescheduleModal-{{ $patient->id }}">
                            Reschedule
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
