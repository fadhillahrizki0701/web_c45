<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM dataset1 WHERE id_dataset1='$id'");

header("location:index.php?alert=hapus");
