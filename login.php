<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi

// menangkap data yang dikirim dari form
$nama = $_POST['username'];

// menyeleksi data admin dengan username dan password yang sesuai

if($nama =="Hikmah Nur Hidayah"){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
}else{
}
?>
