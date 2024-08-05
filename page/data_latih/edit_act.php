<?php
include '../../config/koneksi.php';

$id = $_POST['id_data'];
$nama_data = $_POST['nama_data'];

mysqli_query($koneksi,"UPDATE data_latih SET nama_data='$nama_data' WHERE id_data='$id'");

$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];

for($i=0;$i<count($kriteria);$i++){
	$kr = $kriteria[$i];
	$nl = $bobot[$i];

	mysqli_query($koneksi,"UPDATE bobot_latih SET bobot='$nl' WHERE id_data='$id' and id_kriteria='$kr'");
}


header("location:index.php?alert=edit");

?>