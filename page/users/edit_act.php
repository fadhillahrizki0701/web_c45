<?php
include '../../config/koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];

mysqli_query($koneksi,"update users set nama='$nama', username='$username', password='$pwd' where id_user='$id'");
header("location:index.php?alert=edit");

?>