<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM data_latih WHERE id_data='$id'");
mysqli_query($koneksi, "DELETE FROM bobot_latih WHERE id_data='$id'");

header("location:index.php?alert=hapus");
