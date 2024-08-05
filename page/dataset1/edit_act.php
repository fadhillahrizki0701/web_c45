<?php
include '../../config/koneksi.php';
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Usia = $_POST['Usia'];
$BB_U = $_POST['BB_U'];
$TB_U = $_POST['TB_U'];
$BB_TB = $_POST['BB_TB'];

mysqli_query($koneksi,"update dataset1 set Nama='$Nama', Usia='$Usia', BB_U='$BB_U',TB_U='$TB_U',BB_TB='$BB_TB' where id_dataset1='$id'");
header("location:index.php?alert=edit");

?>
