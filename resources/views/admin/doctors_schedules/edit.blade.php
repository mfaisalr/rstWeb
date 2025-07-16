@extends('admin.layout')

@section('content')

    <div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Edit Data Jadwal Dokter</li>
					</ol>
				</div>
				<!-- Page header end -->

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
						</div>

						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Jadwal Dokter Details</div>
								</div>
								<div class="card-body">
                                    <form action="{{ route('doctors_schedules.update', $schedule->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="doctor_id">Nama Dokter:</label>
                                        <select class="form-control" id="doctor_id" name="doctor_id">
                                            <option value="">Pilih Dokter</option>
                                            @foreach ($doctors as $doctor)
                                                <option value="{{ $doctor->id }}" {{ $schedule->doctor_id == $doctor->id ? 'selected' : '' }}>
                                                    {{ $doctor->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="poliklinik_id">Nama Poliklinik:</label>
                                        <select class="form-control" id="poliklinik_id" name="poliklinik_id">
                                            <option value="">Pilih Poliklinik</option>
                                            @foreach ($polikliniks as $poliklinik)
                                                <option value="{{ $poliklinik->id }}" {{ $schedule->poliklinik_id == $poliklinik->id ? 'selected' : '' }}>
                                                    {{ $poliklinik->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="day_start">Hari Mulai:</label>
                                        <select class="form-control" id="day_start" name="day_start">
                                            <option value="Senin" {{ $schedule->day_start == 'Senin' ? 'selected' : '' }}>Senin</option>
                                            <option value="Selasa" {{ $schedule->day_start == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                            <option value="Rabu" {{ $schedule->day_start == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                            <option value="Kamis" {{ $schedule->day_start == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                            <option value="Jumat" {{ $schedule->day_start == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                            <option value="Sabtu" {{ $schedule->day_start == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                            <option value="Minggu" {{ $schedule->day_start == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="day_end">Hari Selesai:</label>
                                        <select class="form-control" id="day_end" name="day_end">
                                            <option value="Senin" {{ $schedule->day_end == 'Senin' ? 'selected' : '' }}>Senin</option>
                                            <option value="Selasa" {{ $schedule->day_end == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                            <option value="Rabu" {{ $schedule->day_end == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                            <option value="Kamis" {{ $schedule->day_end == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                            <option value="Jumat" {{ $schedule->day_end == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                            <option value="Sabtu" {{ $schedule->day_end == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                            <option value="Minggu" {{ $schedule->day_end == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="time_start">Waktu Mulai:</label>
                                        <input type="time" class="form-control" id="time_start" name="time_start" value="{{ $schedule->time_start }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="time_end">Waktu Selesai:</label>
                                        <input type="time" class="form-control" id="time_end" name="time_end" value="{{ $schedule->time_end }}">
                                    </div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Ubah Data</button>
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
