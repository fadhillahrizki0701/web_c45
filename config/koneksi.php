<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_c45";

$koneksi = mysqli_connect($servername, $username, $password, $database);


if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
