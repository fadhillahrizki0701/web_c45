<?php
include '../../config/koneksi.php';
$id = $_POST['id'];
$Usia = $_POST['Usia'];
$BB_TB = $_POST['BB_TB'];
$Menu = $_POST['Menu'];
$Ket = $_POST['Ket'];

mysqli_query($koneksi,"update dataset2 set Usia='$Usia',BB_TB='$BB_TB', Menu='$Menu', Ket='$Ket' where id_dataset2='$id'");
header("location:index.php?alert=edit");

?>

