@extends('layouts.layoutUser')

@section('content')

<div class="main-container">
	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Beranda</li>
			<li class="breadcrumb-item active">Registrasi Pasien</li>
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
						<div class="card-title">Registrasi Pasien</div>
					</div>
					<div class="card-body">
                        <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
							<div class="">
                            <div class="form-group">
                                <label for="full_name">Nama Lengkap:</label>
                                <input type="text" class="form-control" name="full_name" required>
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Tanggal Lahir:</label>
                                <input type="date" class="form-control" name="birth_date" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin:</label>
                                <select class="form-control" name="gender" required>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="identity_number">Nomor Identitas (KTP/SIM/Passport):</label>
                                <input type="text" class="form-control" name="identity_number" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat Lengkap:</label>
                                <textarea class="form-control" name="address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Nomor Telepon/Handphone:</label>
                                <input type="text" class="form-control" name="phone_number" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email (jika ada):</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <!-- Data Kesehatan -->
                            <h4>Data Kesehatan:</h4>
                            <div class="form-group">
                                <label for="medical_history">Riwayat Penyakit Sebelumnya:</label>
                                <textarea class="form-control" name="medical_history"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="allergies">Alergi (jika ada):</label>
                                <textarea class="form-control" name="allergies"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="medications">Obat yang Sedang Dikonsumsi:</label>
                                <textarea class="form-control" name="medications"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="family_history">Riwayat Keluarga (Penyakit Genetik atau Kronis):</label>
                                <textarea class="form-control" name="family_history"></textarea>
                            </div>

                            <!-- Data Registrasi -->
                            <h4>Data Registrasi:</h4>
                            <div class="form-group">
                                <label for="registration_date">Tanggal Registrasi:</label>
                                <input type="date" class="form-control" name="registration_date" value="{{ now()->format('Y-m-d') }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="registration_time">Waktu Registrasi:</label>
                                <input type="time" class="form-control" name="registration_time" value="{{ now()->format('H:i') }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="poliklinik_id">Poli atau Spesialisasi yang Dituju:</label>
                                <select class="form-control" name="poliklinik_id" required>
                                    @foreach($polikliniks as $poliklinik)
                                        <option value="{{ $poliklinik->id }}">{{ $poliklinik->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Data Tambahan -->
                            <h4>Data Tambahan:</h4>
                            <div class="form-group">
                                <label for="job_status">Status Pekerjaan:</label>
                                <input type="text" class="form-control" name="job_status" required>
                            </div>
                            <div class="form-group">
                                <label for="insurance">Asuransi Kesehatan (jika ada):</label>
                                <input type="text" class="form-control" name="insurance">
                            </div>
                            <div class="form-group">
                                <label for="insurance_policy_number">Nomor Polis Asuransi:</label>
                                <input type="text" class="form-control" name="insurance_policy_number">
                            </div>

                            <!-- Data Darurat -->
                            <h4>Data Darurat:</h4>
                            <div class="form-group">
                                <label for="emergency_contact_name">Nama Kontak Darurat:</label>
                                <input type="text" class="form-control" name="emergency_contact_name" required>
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_relationship">Hubungan dengan Kontak Darurat:</label>
                                <input type="text" class="form-control" name="emergency_contact_relationship" required>
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_phone">Nomor Telepon Kontak Darurat:</label>
                                <input type="text" class="form-control" name="emergency_contact_phone" required>
                            </div>
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
