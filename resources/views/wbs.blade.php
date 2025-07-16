@extends('layouts.layouts1')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- modal -->
    <!-- korupsi modal -->
    <div class="modal modal-form fade" id="formKorupsiModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Form Laporan Korupsi</h3>
						<form class="mt-15" action="{{ route('wbs') }}" id="wbsForm" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">
                                <span><i class="icon-user"></i></span>
                                <input type="text" name="full_name" class="form-control" autocomplete="off" placeholder="Nama Lengkap*" required>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-email2"></i></span>
                                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email*" required>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-team"></i></span>
                                <input type="text" name="work_unit" class="form-control" autocomplete="off" placeholder="Unit Kerja">
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-smartphone"></i></span>
                                <input type="text" name="phone_number" class="form-control" autocomplete="off" placeholder="Nomor Telepon">
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-placeholder2"></i></span>
                                <input type="text" name="address" class="form-control" autocomplete="off" placeholder="Alamat">
                            </div>

                            <div class="mt-1">
                                <textarea name="report" class="form-control" rows="5" placeholder="Tulis laporan Anda di sini..." required></textarea>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-link-symbol"></i></span>
                                <input type="file" name="supporting_photo" class="form-control" accept="image/*" placeholder="Unggah Foto Pendukung">
                            </div>
                            <small class="form-text text-muted mb-2">
                                *Opsional: Unggah foto yang mendukung laporan Anda, jika ada.
                            </small>

                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Kirim Laporan</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- gratifikasi modal -->
     <div class="modal modal-form fade" id="formGratifikasiModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Form Laporan Gratifikasi</h3>
						<form class="mt-15" action="{{ route('wbs') }}" id="wbsForm" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">
                                <span><i class="icon-user"></i></span>
                                <input type="text" name="full_name" class="form-control" autocomplete="off" placeholder="Nama Lengkap*" required>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-email2"></i></span>
                                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email*" required>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-team"></i></span>
                                <input type="text" name="work_unit" class="form-control" autocomplete="off" placeholder="Unit Kerja">
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-smartphone"></i></span>
                                <input type="text" name="phone_number" class="form-control" autocomplete="off" placeholder="Nomor Telepon">
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-placeholder2"></i></span>
                                <input type="text" name="address" class="form-control" autocomplete="off" placeholder="Alamat">
                            </div>

                            <div class="mt-1">
                                <textarea name="report" class="form-control" rows="5" placeholder="Tulis laporan Anda di sini..." required></textarea>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-link-symbol"></i></span>
                                <input type="file" name="supporting_photo" class="form-control" accept="image/*" placeholder="Unggah Foto Pendukung">
                            </div>
                            <small class="form-text text-muted mb-2">
                                *Opsional: Unggah foto yang mendukung laporan Anda, jika ada.
                            </small>

                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Kirim Laporan</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- benturan kepentingan modal -->
    <div class="modal modal-form fade" id="formBenturanKepentinganModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Form Laporan</h3>
						<h3>Benturan Kepentingan</h3>
						<form class="mt-15" action="{{ route('wbs') }}" id="wbsForm" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">
                                <span><i class="icon-user"></i></span>
                                <input type="text" name="full_name" class="form-control" autocomplete="off" placeholder="Nama Lengkap*" required>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-email2"></i></span>
                                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email*" required>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-team"></i></span>
                                <input type="text" name="work_unit" class="form-control" autocomplete="off" placeholder="Unit Kerja">
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-smartphone"></i></span>
                                <input type="text" name="phone_number" class="form-control" autocomplete="off" placeholder="Nomor Telepon">
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-placeholder2"></i></span>
                                <input type="text" name="address" class="form-control" autocomplete="off" placeholder="Alamat">
                            </div>

                            <div class="mt-1">
                                <textarea name="report" class="form-control" rows="5" placeholder="Tulis laporan Anda di sini..." required></textarea>
                            </div>

                            <div class="input-group mt-1">
                                <span><i class="icon-link-symbol"></i></span>
                                <input type="file" name="supporting_photo" class="form-control" accept="image/*" placeholder="Unggah Foto Pendukung">
                            </div>
                            <small class="form-text text-muted mb-2">
                                *Opsional: Unggah foto yang mendukung laporan Anda, jika ada.
                            </small>

                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Kirim Laporan</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--//header-->
<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="/" style="text-decoration: none;">Beranda</a>
						<span>WBS</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->

        @if ($message = Session::get('success'))
            <div class="successform">
                <p>{{ $message }}</p>
            </div>
        @endif
                
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">WBS</div>
					<h1>Whistle Blower System</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container" >
                <h2 class="h3 font-weight-bold mb-3">Whistle Blowing System (WBS)</h2>
                    <p>
                        Whistle Blowing System (WBS) adalah layanan yang disediakan oleh <strong>RUMAH SAKIT TK. II DR. R. HARDJANTO</strong> bagi Anda yang memiliki informasi atau dugaan adanya pelanggaran yang terjadi di lingkungan rumah sakit.
                    </p>
                    <p>
                        Rumah sakit berkomitmen menjaga <strong>kerahasiaan identitas pelapor</strong> dan memberikan <strong>perlindungan</strong> dari segala bentuk intimidasi. Laporkan dengan jujur, bertanggung jawab, dan berikan informasi selengkap mungkin.
                    </p>
<br>
        <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
    
    <div class="col-md mb-3">
        <a href="" class="counter-box-link" data-toggle="modal" data-target="#formKorupsiModal">
            <div class="icn-text">
                <div class="icn-text-simple"><i class="fas fa-shield-alt"></i></div>
                <h5 class="icn-text-title">Laporan Korupsi</h5>
                <p>Laporkan dugaan tindak korupsi di lingkungan RS TK. II DR. R. HARDJANTO secara aman.</p>
            </div>
        </a>
    </div>

    <div class="col-md mb-3">
        <a href="" class="counter-box-link" data-toggle="modal" data-target="#formGratifikasiModal">
            <div class="icn-text">
                <div class="icn-text-simple"><i class="fas fa-gift"></i></div>
                <h5 class="icn-text-title">Laporan Gratifikasi</h5>
                <p>Laporkan penerimaan hadiah atau fasilitas yang tidak sesuai peraturan.</p>
            </div>
        </a>
    </div>

    <div class="col-md mb-3">
        <a href="" class="counter-box-link" data-toggle="modal" data-target="#formBenturanKepentinganModal">
            <div class="icn-text">
                <div class="icn-text-simple"><i class="fas fa-exclamation-triangle"></i></div>
                <h5 class="icn-text-title">Benturan Kepentingan</h5>
                <p>Laporkan apabila terjadi konflik kepentingan dalam pelayanan atau pengambilan keputusan.</p>
            </div>
        </a>
    </div>


</div></div>
</div>
</div>

@endsection