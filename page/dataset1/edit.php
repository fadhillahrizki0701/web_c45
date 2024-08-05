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
                    <h4 class="card-title">Edit Data 1</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="edit_act.php" method="POST">
                            <?php
                            $id = $_GET["id"];
                            $sql = mysqli_query($koneksi, "SELECT * FROM dataset1 WHERE id_dataset1='$id'");
                            $data = mysqli_fetch_array($sql);
                            ?>
                            <div class="form-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $data['id_dataset1'] ?>">
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Nama" class="form-control" name="Nama" value="<?= $data['Nama'] ?>" placeholder="Nama" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Usia</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Usia" class="form-control" name="Usia" value="<?= $data['Usia'] ?>" placeholder="Usia" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>BB/U</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="BB_U" class="form-control" name="BB_U" value="<?= $data['BB_U'] ?>" placeholder="BB/U" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>TB/U</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="TB_U" class="form-control" name="TB_U" value="<?= $data['TB_U'] ?>" placeholder="TB/U" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>BB/TB</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="BB_TB" class="form-control" name="BB_TB" value="<?= $data['BB_TB'] ?>" placeholder="BB/TB" required>
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