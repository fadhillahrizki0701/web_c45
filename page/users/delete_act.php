<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM users WHERE id_user='$id'");

header("location:index.php?alert=hapus");
