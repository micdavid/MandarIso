<?php 
session_start();

session_destroy();

setcookie('status','login', time()-3600);
header("location:index.php?pesan=logout");
?>