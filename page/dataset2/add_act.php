<?php include '../../config/koneksi.php';

 // Menghubungkan ke database
    $Usia = $_POST['Usia'];
    $BB_TB = $_POST['BB_TB'];
    $Menu = $_POST['Menu'];
    $Ket = $_POST['Ket'];

    mysqli_query($koneksi, "INSERT INTO dataset2 VALUES (NULL,'$Usia','$BB_TB','$Menu','$Ket')");


header("location:index.php?alert=tambah");
?>


