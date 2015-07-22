<?php
//memanggil koneksi php yang berada di file config.php
include('config.php');

//parsing nilai variable yang di isi user, serta memasukkannya ke dalam variable yang di masukkan query
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = md5($password);

//query untuk select nama 
$cek = mysql_query("select * from user where username='$username'");
//query untuk select nama_lengkap
$cek1 = mysql_query("select * from user where nama_lengkap='$fullname'");
//query untuk select username dan nama lengkap
$cek2 = mysql_query("select * from user where username='$username',nama_lengkap='$fullname'");

//deklarasikan nilai variable untuk pesan error
$falsevalue = 'sebagian data yang anda isi sudah terpakai, silahkan isi data yang berbeda! <a href=register.php>Back</a>';

//cek kondisi jika nilai $username ada di database maka pesan error muncul
if(mysql_num_rows($cek) == 1)
    echo $falsevalue;
//cek kondisi jika nilai $fullname ada di database maka pesan error muncul 
elseif (mysql_num_rows($cek1) == 1)
    echo $falsevalue;
//cek kondisi jika nilai $username dan $fullname ada di database maka pesan error juga muncul 
elseif(mysql_num_rows($cek2) == 1)
    echo $falsevalue;

//jika semua kondisi terlewati maka data yang sudah di isi di register akan di masukkan ke database dan 
//halaman di alihkan ke login.php
else {
     $query = mysql_query("insert into user values('$fullname','$username', '$password','$email', '$alamat')") or die(mysql_error());
        if ($query) {
        	header('location:login.php');
        }
    }
?>