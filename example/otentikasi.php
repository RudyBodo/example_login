<?php
include('config.php');

//membuat session
session_start();

//variable username dan password di parsing ke $q
$username = $_POST['username'];
$password = $_POST['password'];

//konversi data variable username dan password ke string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//enkripsi variable password ke md5 untuk menghindari sniffing
$password = md5($password);

if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}
//mengecek user yang valid di dtabase
$q = mysql_query("select * from user where username='$username' and password='$password'");
//jika user valid di alihkan ke halaman index
if (mysql_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
	header('location:index.php');
//tapi jika user tidak valid maka akan menampilkan alert
} else {
	header('location:login.php?error=4');
}
?>