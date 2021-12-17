<?php 
session_start();
unset($_SESSION['email']);

$_SESSION['logout'] = "Anda berhasil logout!";
header("location: index.php");
