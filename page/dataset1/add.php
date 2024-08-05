
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
                    <h4 class="card-title">Tambah Data 1</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="add_act.php" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Nama" class="form-control" name="Nama" placeholder="Nama" required>
                                    </div>
                                    <div class="col-md-4">
                                    <label>Usia (Bulan)</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="Usia" id="Usia" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                            <?php 
                                            for ($i = 0; $i <= 70; $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>BB/U</label>
                                        </div>
                                    <div class="col-md-8 form-group">
                                    <select name="BB_U" id="BB_U" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                        <option value="Normal">Normal</option>
                                        <option value="Kurang">Kurang</option>
                                        <option value="Sangat Kurang">Sangat Kurang</option>
                                    </select>        
                                    </div>
                                    <div class="col-md-4">
                                        <label>TB/U</label>
                                        </div>
                                    <div class="col-md-8 form-group">
                                    <select name="TB_U" id="TB_U" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                        <option value="Normal">Normal</option>
                                        <option value="Pendek">Pendek</option>
                                        <option value="Sangat Pendek">Sangat Pendek</option>
                                    </select>        
                                    </div>
                                    <div class="col-md-4">
                                    <label>BB/TB</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                    <select name="BB_TB" id="BB_TB" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                        <option value="Gizi Baik">Gizi Baik</option>
                                        <option value="Gizi Kurang">Gizi Kurang</option>
                                    </select>        
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