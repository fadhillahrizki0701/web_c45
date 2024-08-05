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
                    <h4 class="card-title">Edit User</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="edit_act.php" method="POST">
                            <?php
                            $id = $_GET["id"];
                            $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user='$id'");
                            $data = mysqli_fetch_array($sql);
                            ?>
                            <div class="form-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $data['id_user'] ?>">
                                    <div class="col-md-4">
                                        <label>Nama </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama" class="form-control" name="nama" value="<?= $data['nama'] ?>" placeholder="Nama " required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Username</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="username" class="form-control" name="username" value="<?= $data['username'] ?>" placeholder="Username" required>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="hidden" id="password" class="form-control" name="password" value="<?= $data['password'] ?>" >
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