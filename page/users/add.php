
<?php 
include '../template/header.php';
include '../template/sidebar.php';
?>

<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Users</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="add_act.php" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Users</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Users" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Username</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <a href="index.php" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../template/footer.php'; ?>