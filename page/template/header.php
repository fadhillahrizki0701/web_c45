<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB - Klasifikasi C4.5</title>

    <link rel="stylesheet" href="../../assets/assets/css/main/app.css">
    <link rel="stylesheet" href="../../assets/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../../assets/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="../../assets/assets/css/shared/iconly.css">
    <link rel="stylesheet" href="../../assets/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="../../assets/assets/css/pages/simple-datatables.css">

</head>

<body>
    <?php
    include '../../config/setting.php';
    include '../../config/koneksi.php';
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../../index.php?alert=belum_login");
    }
    ?>