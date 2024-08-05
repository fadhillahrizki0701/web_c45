
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
                    <h4 class="card-title">Tambah Data 2</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="add_act.php" method="POST">
                            <div class="form-body">
                                <div class="row">
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
                                        <label>BB/TB</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                    <select name="BB_TB" id="BB_TB" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                        <option value="Gizi Baik">Gizi Baik</option>
                                        <option value="Gizi Kurang">Gizi Kurang</option>
                                    </select>        
                                    </div>
                                    <div class="col-md-4">
                                        <label>Menu Makanan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="Menu" id="Menu" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                        <?php
                                            for ($i = 1; $i <= 18; $i++) {
                                                echo "<option value = 'Menu $i'>Menu $i</option>";
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                    <select name="Ket" id="Ket" class="form-control" required>
                                        <option> Silahkan Pilih </option>
                                        <option value="Baik">Baik</option>
                                        <option value="Tidak Baik">Tidak Baik</option>
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
     

