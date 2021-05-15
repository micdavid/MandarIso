<?php include "connect.php"; 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$file = mysqli_query($conn,"SELECT * FROM user_pw WHERE username='$username' and password='$password'");
$periksa = mysqli_num_rows($file);

if($periksa > 0){
	if(isset($_POST['remember'])){
		setcookie('status','login', time()+1200);
	}
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:welcome.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>