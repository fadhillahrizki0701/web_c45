<?php include '../template/header.php'; ?>
<?php include '../template/sidebar.php'; ?>

<div class="page-heading">
    <h3>Dashboard Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="bi-bar-chart-line-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Data 1</h6>
                                    <?php
                                    $query = "SELECT * FROM dataset1";
                                    $result = $koneksi->query($query);
                                    $dataset1 = mysqli_num_rows($result);
                                    ?>
                                    <h6 class="font-extrabold mb-0"><?= $dataset1?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi-bar-chart-line-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Data 2</h6>
                                    <?php
                                    $query = "SELECT * FROM dataset2";
                                    $result = $koneksi->query($query);
                                    $dataset2 = mysqli_num_rows($result);
                                    ?>
                                    <h6 class="font-extrabold mb-0"><?= $dataset2 ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi-people"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">User</h6>
                                    <?php
                                    $query = "SELECT * FROM users";
                                    $result = $koneksi->query($query);
                                    $users = mysqli_num_rows($result);
                                    ?>
                                    <h6 class="font-extrabold mb-0"><?= $users ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Hoverable rows end -->

            <?php include "../template/footer.php"; ?>
