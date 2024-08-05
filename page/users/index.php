<?php
include '../template/header.php';
include '../template/sidebar.php';
?>

<div class="page-heading">
    <h3>Data Users</h3>
</div>
<!-- Hoverable rows start -->
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Users</h4>
                </div>
                <div class="col-4 p-3">
                    <a href="<?= $base_url ?>/users/add.php" class="btn icon icon-left btn-success"><i data-feather="edit"></i>Tambah Data</a>
                </div>

                <div class="card-content">

                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-3">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 8%;">No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM users");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr class="text-center" >
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['username'] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $data['id_user'] ?>" class="btn icon icon-left btn-warning"><i data-feather="edit"></i></a>
                                            <a href="delete.php?id=<?= $data['id_user'] ?>" class="btn icon icon-left btn-danger"><i data-feather="trash"></i></a>
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