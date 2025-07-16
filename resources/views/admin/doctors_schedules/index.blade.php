@extends('admin.layout')

@section('content')
<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Jadwal Dokter</li>
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
                <th>Dokter</th>
                <th>Poliklinik</th>
                <th>Mulai Hari</th>
                <th>Selesai Hari</th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $schedule->doctor->name }}</td>
                    <td>{{ $schedule->poliklinik->name }}</td>
                    <td>{{ $schedule->day_start }}</td>
                    <td>{{ $schedule->day_end }}</td>
                    <td>{{ $schedule->time_start }}</td>
                    <td>{{ $schedule->time_end }}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            {{-- Tombol Edit --}}
                            <a class="btn btn-info btn-sm" href="{{ route('doctors_schedules.edit', $schedule->id) }}">
                                <i class="icon-edit1"></i>
                            </a>
                            {{-- Tombol Hapus --}}
                            <form action="{{ route('doctors_schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;">
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
