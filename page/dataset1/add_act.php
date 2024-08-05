<?php
include '../../config/koneksi.php';

$Nama = $_POST['Nama'];
$Usia = $_POST['Usia'];
$BB_U = $_POST['BB_U'];
$TB_U = $_POST['TB_U'];
$BB_TB = $_POST['BB_TB'];

mysqli_query($koneksi, "INSERT INTO dataset1 VALUES (NULL,'$Nama','$Usia','$BB_U','$TB_U','$BB_TB')");

header("location:index.php?alert=tambah");

?>

