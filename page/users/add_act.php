<?php
include '../../config/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO users VALUES (NULL,'$nama','$username','$password')");

header("location:index.php?alert=tambah");

?>