<?php
include '../template/header.php';
include '../template/sidebar.php';

if (isset($_POST['upload'])) {
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) { // Ubah delimiter menjadi titik koma (;)
        $Nama = mysqli_real_escape_string($koneksi, $row[0]);
        $Usia = mysqli_real_escape_string($koneksi, $row[1]);
        $BB_U = mysqli_real_escape_string($koneksi, $row[2]);
        $TB_U = mysqli_real_escape_string($koneksi, $row[3]);
        $BB_TB = mysqli_real_escape_string($koneksi, $row[4]);

        $sql = "INSERT INTO dataset1 (Nama, Usia, BB_U, TB_U, BB_TB)
                VALUES ('$Nama', '$Usia', '$BB_U', '$TB_U', '$BB_TB')";

        if (!$koneksi->query($sql)) {
            echo "Error: " . $koneksi->error;
        }
    }
    fclose($handle);
    echo "Data imported successfully";
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM dataset1";
    if ($koneksi->query($sql) === TRUE) {
        echo "All data deleted successfully";
    } else {
        echo "Error deleting data: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Mining</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Import data from excel</label>
                <input type="file" name="file" class="form-control" accept=".csv">
            </div>
            <button type="submit" name="upload" class="btn btn-success">Upload Data</button>
            <button type="submit" name="delete" class="btn btn-danger">Delete All Data Latih</button>
        </form>
        <p class="mt-3"> Harap pastikan file CSV mengikuti format di bawah ini:</p>
        <pre class="mt-2">Nama;Usia (bulan);BB_U;TB_U;BB_TB
        Fitri;25;Kurang;Normal;Gizi Baik
        Yusuf;30;Normal;Pendek;Gizi Baik
        ...</pre>
                <div class="col-4 py-3">
                    <a href="<?= $base_url ?>/dataset1/process.php" class="btn icon icon-left btn-success"><i data-feather="process"></i>Proses Mining</a>
                </div>

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
    </div>
</body>
</html>
