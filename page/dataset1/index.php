<?php
include '../template/header.php';
include '../template/sidebar.php';
?>

<div class="page-heading">
    <h3>Data 1</h3>
</div>
<!-- Hoverable rows start -->
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data 1</h4>
                </div>
                <div class="col-4 py-3">
                    <a href="<?= $base_url ?>/dataset1/add.php" class="btn icon icon-left btn-success"><i data-feather="edit"></i>Tambah Data</a>
                </div>

                <div class="card-content">

                    <!-- table hover -->
                       <section class="section">
                        <div class="row" id="table-hover-row">
                         <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data 1</h4>
                            </div>
                            <div class="card-content">

                            <div class="table-responsive">
                        <table class="table table-hover mb-3" id="table1">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 8%;" rowspan="2">No</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Usia</th>
                                    <th rowspan="2">BB/U</th>
                                    <th rowspan="2">TB/U</th>
                                    <th rowspan="2">BB/TB</th>
                                </tr>
                            </thead>
                        <tbody>

                        <?php
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM dataset1");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['Nama'] ?></td>
                                        <td><?= $data['Usia'] ?></td>
                                        <td><?= $data['BB_U'] ?></td>
                                        <td><?= $data['TB_U'] ?></td>
                                        <td><?= $data['BB_TB'] ?></td>
                                        
                                        <td>
                                            <a href="edit.php?id=<?= $data['id_dataset1'] ?>" class="btn icon icon-left btn-warning"><i data-feather="edit"></i></a>
                                            <a href="delete.php?id=<?= $data['id_dataset1'] ?>" class="btn icon icon-left btn-danger"><i data-feather="trash"></i></a>
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