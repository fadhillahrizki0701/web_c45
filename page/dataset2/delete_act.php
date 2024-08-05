<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM dataset2 WHERE id_dataset2='$id'");

header("location:index.php?alert=hapus");
