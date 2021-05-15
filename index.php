<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<?php 
		if (isset($_COOKIE['status'])){
			if($_COOKIE['status'] == 'login'){
				header('location:welcome.php');
			}
		}
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Username dan Password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Berhasil logout";
			}
			else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login terlebih dahulu";
			}
		}
	?>

	<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
		<div class="container">
			<div class="card login-card">
				<div class="row no-gutters">
					<div class="col-md-5">
						<img src="assets/images/kamar.jpg" alt="login" class="login-card-img">
					</div>
					<div class="col-md-7">
						<div class="card-body">
							<h2>LOGIN FORM</h2>
							<p class="login-card-description">Sign into your account</p>

							<form method="post" action="cek.php">
								<div class="form-group">
									<input type="text" name="username" class="form-control" placeholder="Username">
								</div>
								<div class="form-group mb-4">
									<input type="password" name="password" class="form-control" placeholder="***********">
								</div>
								<input class="btn btn-block login-btn mb-4" type="submit" value="Login">
								<input type="checkbox" name="remember">
								<label for="remember">Remember Me</label>
							</form>
							<a href="#!" class="forgot-password-link">Forgot password?</a>
							<p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
							<nav class="login-card-footer-nav">
								<a href="#!">Terms of use.</a>
								<a href="#!">Privacy policy</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>