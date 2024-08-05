<?php
include '../../config/setting.php';
?>

<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header position-relative">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
                    </div> -->
                    <div class="logo">
                        <a href=""><span>Klasifikasi C4.5</span></a>
                    </div>
                 
                    <div class="sidebar-toggler  x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item ">
                        <a href="<?= $base_url ?>/dashboard/" class='sidebar-link'>
                            <i class="bi bi-menu-down"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Data &amp; Tabel</li>

                    

                    <li class="sidebar-item  ">
                        <a href="<?= $base_url ?>/users/" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                            <span>Data Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="<?= $base_url ?>/dataset1/" class='sidebar-link'>
                        <i class="bi bi-bar-chart-line-fill"></i>
                            <span>Data 1</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="<?= $base_url ?>/dataset2/" class='sidebar-link'>
                        <i class="bi bi-bar-chart-line-fill"></i>
                            <span>Data 2</span>
                        </a>
                    </li>
                 
                    <li class="sidebar-title">Algoritma C4.5</li>

                    <li class="sidebar-item ">
                        <a href="<?= $base_url ?>/datatrain1/index.php" class='sidebar-link'>
                            <i class="bi bi-archive-fill"></i>
                            <span>Data Training 1</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a href="<?= $base_url ?>/datatrain2/index.php" class='sidebar-link'>
                            <i class="bi bi-archive-fill"></i>
                            <span>Data Training 2</span>
                        </a>
                    </li>
                   
                    <li class="sidebar-title">Aksi</li>
                    <li class="sidebar-item  ">
                        <a href="<?= $base_url ?>/auth/" class='sidebar-link'>
                        <i class="bi bi-box-arrow-left"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>