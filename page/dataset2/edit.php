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
                    <h4 class="card-title">Edit Data 2</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="edit_act.php" method="POST">
                            <?php
                            $id = $_GET["id"];
                            $sql = mysqli_query($koneksi, "SELECT * FROM dataset2 WHERE id_dataset2='$id'");
                            $data = mysqli_fetch_array($sql);
                            ?>
                            <div class="form-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $data['id_dataset2'] ?>">
                                    <div class="col-md-4">
                                        <label>Usia</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Usia" class="form-control" name="Usia" value="<?= $data['Usia'] ?>" placeholder="Usia" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>BB/TB</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="BB_TB" class="form-control" name="BB_TB" value="<?= $data['BB_TB'] ?>" placeholder="BB/TB" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Menu Makanan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Menu" class="form-control" name="Menu" value="<?= $data['Menu'] ?>" placeholder="Menu Makanan" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Ket" class="form-control" name="Ket" value="<?= $data['Ket'] ?>" placeholder="Keterangan" required>
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