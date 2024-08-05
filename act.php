<?php 
// menghubungkan dengan koneksi
include 'config/koneksi.php';

// menangkap data yang dikirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['id_user'];	
	$_SESSION['username'] = $data['username'];
	$_SESSION['status'] = "login";

	header("location:page/dashboard/");
}else{
	header("location:index.php?alert=gagal");
}
