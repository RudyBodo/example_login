<?php 
//membuat session
session_start();

//mengecek jika session username bernilai null maka akan di alihkan ke login.php 
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	header('location:login.php');
}
?>