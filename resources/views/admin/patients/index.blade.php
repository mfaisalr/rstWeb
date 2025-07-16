@extends('admin.layout')

@section('content')
<div class="main-container">
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Pasien</li>
            <li class="breadcrumb-item active">Konfirmasi Pasien</li>
        </ol>
    </div>
    <!-- Page header end -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif


    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Panjang</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Waktu Daftar</th>
                                    <th>Poliklinik</th>
                                    <th>Jadwal Pemeriksaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $patient->full_name }}</td>
                                        <td>{{ $patient->registration_date }}</td>
                                        <td>{{ $patient->registration_time }}</td>
                                        <td>{{ $patient->poliklinik->name }}</td>
                                        <td>
                                            {{ $patient->examination_datetime ? \Carbon\Carbon::parse($patient->examination_datetime)->locale('id')->translatedFormat('l, d M Y H:i') : 'Belum Dijadwalkan' }}
                                        </td>
                                        <td>{{ $patient->status }}</td>
                                        <td>
                                            @if ($patient->status === 'Pending')
                                                <form action="{{ route('patients.accept-registration', $patient->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="badge badge-primary" style="border: none; font-size: 11px;">Konfirmasi Pasien</button>
                                                </form>
                                            @else
                                                <span class="badge badge-success" style="font-size: 11px;">Accepted</span>
                                                <!-- Trigger Button for Modal -->
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#rescheduleModal-{{ $patient->id }}">Reschedule</button>
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Reschedule Modal -->
                                    <div class="modal fade" id="rescheduleModal-{{ $patient->id }}" tabindex="-1" aria-labelledby="rescheduleModalLabel-{{ $patient->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('patients.reschedule', $patient->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="rescheduleModalLabel-{{ $patient->id }}">Reschedule Patient</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="new_date-{{ $patient->id }}" class="form-label">Select New Date</label>
                                                            <input type="date" name="new_date" id="new_date-{{ $patient->id }}" class="form-control" value="{{ old('new_date') }}" required>
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
                                    <!-- End Reschedule Modal -->

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

<!-- Include Bootstrap JS at the end of the page if not already included -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
