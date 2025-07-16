<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>web login rst</title>
		
		<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="POST" action="{{ route('login') }}">
                @csrf
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									Login RST
								</a>
								<h5>Selamat datang,<br />Harap masukkan akun anda.</h5>
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Masukkan Alamat Email" />
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Masukkan Password" autocomplete="current-password"/>
								</div>
								<div class="actions">
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
								<hr>
								<div class="m-0">
									<span class="additional-link">Tidak ada akun? <a href="signup.html" class="btn btn-secondary">Signup</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>
</html>