@extends('layouts.layoutUser')

@section('content')
<div class="main-container">
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Pasien</li>
            <li class="breadcrumb-item active">Pendaftaran Aktif</li>
        </ol>
    </div>
    <!-- Page header end -->

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
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
                                        <td>
                                            @if($patient->status == 'Pending')
                                                <span class="badge badge-warning">{{ $patient->status }}</span>
                                            @elseif($patient->status == 'Rescheduled')
                                                <span class="badge badge-info">{{ $patient->status }}</span>
                                            @elseif($patient->status == 'Accepted')
                                                <span class="badge badge-success">{{ $patient->status }}</span>
                                            @else
                                                <span>{{ $patient->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-primary">View</a>
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

<!-- Include Bootstrap JS at the end of the page if not already included -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
