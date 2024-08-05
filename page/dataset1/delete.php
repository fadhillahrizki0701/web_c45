<?php include '../template/header.php'; ?>
<?php include '../template/sidebar.php'; ?>
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard / Data 1</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">

                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Hapus Data</h5>
                                    <span></span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-chevron-left"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-times close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">

                                        <p>Anda Yakin Ingin Menghapus Data Ini ?</p>
                                        <br>
                                        <?php
                                        $idd = $_GET['id'];
                                        ?>
                                        <a href="delete_act.php?id=<?= $idd ?>" class="btn btn-danger waves-effect waves-light btn-mini">Hapus</a>
                                        <a href="index.php" class="btn btn-primary waves-effect waves-light btn-mini">Kembali</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../template/footer.php'; ?>