@extends('admin.layout')

@section('content')

    <div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Tambah Data Jadwal Dokter</li>
					</ol>
				</div>
				<!-- Page header end -->

                {{-- Pesan kesalahan jika ada --}}
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
                                    <form action="{{ route('doctors_schedules.store') }}" method="POST">
                                        @csrf
                                            <div class="form-group">
                                                <label for="doctor_id">Nama Dokter:</label>
                                                <select class="form-control" id="doctor_id" name="doctor_id">
                                                    <option value="">Pilih Dokter</option>
                                                    @foreach ($doctors as $doctor)
                                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="poliklinik_id">Nama Poliklinik:</label>
                                                <select class="form-control" id="poliklinik_id" name="poliklinik_id">
                                                    <option value="">Pilih Poliklinik</option>
                                                    @foreach ($polikliniks as $poliklinik)
                                                        <option value="{{ $poliklinik->id }}">{{ $poliklinik->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="day_start">Hari Mulai:</label>
                                                <select class="form-control" id="day" name="day_start">
                                                    <option value="Senin">Senin</option>
                                                    <option value="Selasa">Selasa</option>
                                                    <option value="Rabu">Rabu</option>
                                                    <option value="Kamis">Kamis</option>
                                                    <option value="Jumat">Jumat</option>
                                                    <option value="Sabtu">Sabtu</option>
                                                    <option value="Minggu">Minggu</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="day_end">Hari Selesai:</label>
                                                <select class="form-control" id="day" name="day_end">
                                                    <option value="Senin">Senin</option>
                                                    <option value="Selasa">Selasa</option>
                                                    <option value="Rabu">Rabu</option>
                                                    <option value="Kamis">Kamis</option>
                                                    <option value="Jumat">Jumat</option>
                                                    <option value="Sabtu">Sabtu</option>
                                                    <option value="Minggu">Minggu</option>
                                                </select>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="time_start">Waktu Mulai:</label>
                                                <input type="time" class="form-control" id="time_start" name="time_start" placeholder="Masukkan waktu mulai">
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="time_end">Waktu Selesai:</label>
                                                <input type="time" class="form-control" id="time_end" name="time_end" placeholder="Masukkan waktu selesai">
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
