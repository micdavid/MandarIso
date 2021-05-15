<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" href="assets/css/welcome.css">
</head>
<body>
	<h2 style="color: aqua;">Login Berhasil</h2>
	<br/>

	<?php 
	session_start();
	if (isset($_COOKIE['status'])){
		if($_COOKIE['status'] == 'login'){
			$_COOKIE['status'] == true;
		}elseif($_COOKIE['status']!="login"){
			header("location:index.php?pesan=belum_login");
		}
	}elseif($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

	<h3 style="color: aqua;">Selamat datang GAN! Anda berhasil login.</h3>
	<br/>
	<br/>
	<a style="color: aqua;" href="logout.php">LOGOUT</a>

</body>
</html>