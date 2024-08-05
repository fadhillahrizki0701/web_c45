
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
                    <h4 class="card-title">Edit Data Kopi</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="edit_act.php" method="POST">
                            <?php 
                            $id = $_GET['id'];
                            $sql = mysqli_query($koneksi,"SELECT * FROM data_latih WHERE id_data='$id'");
                            $dataa = mysqli_fetch_array($sql);
                            ?>
                            <div class="form-body">
                                <div class="row">
                                    <input type="hidden" name="id_data" id="id_data" value="<?= $dataa['id_data'] ?>">
                                    <div class="col-md-4">
                                        <label>Nama Data</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama_data" class="form-control" value="<?= $dataa['nama_data'] ?>" name="nama_data" placeholder="Nama Data" required>
                                    </div>
                                     
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kriteria</th>
                                                    <th>Nilai</th>
                                                </tr>
                                                <?php
                                                $no = 1;
                                                $data = mysqli_query($koneksi, "SELECT * FROM bobot_latih, kriteria WHERE id_data='$id' and bobot_latih.id_kriteria=kriteria.id_kriteria");
                                                while ($data_kriteria = mysqli_fetch_array($data)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data_kriteria['nama_kriteria'] ?></td>
                                                    <td>
                                                        <input type="hidden" name="kriteria[]" value="<?= $data_kriteria['id_kriteria'] ?>">
                                                        <select name="bobot[]" class="form-control">
                                                            <option value="">Pilih</option>
                                                            <?php
                                                            $id = $data_kriteria['id_kriteria'];
                                                            $sqll = mysqli_query($koneksi, "SELECT * FROM subkriteria WHERE id_kriteria='$id'");
                                                            while ($sk = mysqli_fetch_array($sqll)) {
                                                            ?>
                                                            <option value="<?= $sk['nilai_subkriteria'] ?>" <?= $sk['nilai_subkriteria'] == $data_kriteria['bobot'] ? "selected" : null ?>><?= $sk['nama_subkriteria'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
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