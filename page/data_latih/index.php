<?php
include '../template/header.php';
include '../template/sidebar.php';
?>

<div class="page-heading">
    <h3>Data Kopi </h3>
</div>
<!-- Hoverable rows start -->
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kopi </h4>
                </div>
                <div class="col-4 p-3">
                    <a href="<?= $base_url ?>/data_latih/add.php" class="btn icon icon-left btn-success"><i data-feather="edit"></i>Tambah Data</a>
                </div>

                <div class="card-content">

                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-3" id="table1">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 8%;" rowspan="2">No</th>
                                    <th rowspan="2">Nama Data</th>
                                    <?php
                                    $kriteria = mysqli_query($koneksi, "select * from kriteria");
                                    $data_kriteria = mysqli_num_rows($kriteria);
                                    ?>
                                    <th colspan="<?= $data_kriteria ?>">
                                        <center>Kriteria</center>
                                    </th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                    <tr>
                                <?php
                                while ($k = mysqli_fetch_array($kriteria)) {
                                ?>
                                        <th>
                                            <center><?= $k['nama_kriteria'] ?></center>
                                        </th>
                                        <?php } ?>
                                    </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM data_latih");
                                while ($data_latih = mysqli_fetch_array($sql)) {
                                    $iddata = $data_latih['id_data'];
                                ?>
                                    <tr class="text-center" >
                                        <td><?= $no++ ?></td>
                                        <td><?= $data_latih['nama_data'] ?></td>
                                        <?php
                                        $nilai = mysqli_query($koneksi, "SELECT * FROM bobot_latih WHERE id_data='$iddata'");
                                        while ($n = mysqli_fetch_array($nilai)) {
                                        ?>
                                            <td><?= $n['bobot'] ?></td>
                                        <?php } ?>
                                        <td>
                                            <a href="edit.php?id=<?= $iddata ?>" class="btn icon icon-left btn-warning"><i data-feather="edit"></i></a>
                                            <a href="delete.php?id=<?= $iddata ?>" class="btn icon icon-left btn-danger"><i data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hoverable rows end -->
<?php
include '../template/footer.php';
?>