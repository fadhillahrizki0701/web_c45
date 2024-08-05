<?php
include '../../config/koneksi.php';

$nama_data = $_POST['nama_data'];

mysqli_query($koneksi,"INSERT INTO data_latih VALUES(NULL,'$nama_data')");
$id_data = mysqli_insert_id($koneksi);

$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];

for ($i= 0; $i < count($kriteria); $i++){
    $kr = $kriteria[$i];
    $bb= $bobot[$i];

    mysqli_query($koneksi,"INSERT INTO  bobot_latih VALUES (NULL,'$id_data','$kr','$bb')");
}
header("location:index.php");
?>