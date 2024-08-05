<?php
include '../template/header.php';
include '../template/sidebar.php';

if (isset($_POST['upload'])) {
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) { // Ubah delimiter menjadi titik koma (;)
        $Usia = mysqli_real_escape_string($koneksi, $row[0]);
        $BB_TB = mysqli_real_escape_string($koneksi, $row[1]);
        $Menu = mysqli_real_escape_string($koneksi, $row[2]);
        $Ket = mysqli_real_escape_string($koneksi, $row[3]);
       

        $sql = "INSERT INTO dataset2 (Usia, BB_TB, Menu, Ket)
                VALUES ('$Usia', '$BB_TB', '$Menu', '$Ket')";

        if (!$koneksi->query($sql)) {
            echo "Error: " . $koneksi->error;
        }
    }
    fclose($handle);
    echo "Data imported successfully";
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM dataset2";
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
        <pre class="mt-2">Usia (bulan);BB_TB;Menu;Ket
        25;Gizi Kurang;M3;Tidak Baik
        19;Gizi Kurang;M9;Baik
        ...</pre>
        <button class="btn btn-primary mt-3">Proses Mining</button>
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data 2</h4>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-hover mb-3" id="table1">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 8%;" rowspan="2">No</th>
                                            <th rowspan="2">Usia</th>
                                            <th rowspan="2">BB/TB</th>
                                            <th rowspan="2">Menu</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql = mysqli_query($koneksi, "SELECT * FROM dataset2");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['Usia'] ?></td>
                                            <td><?= $data['BB_TB'] ?></td>
                                            <td><?= $data['Menu'] ?></td>
                                            <td><?= $data['Ket'] ?></td>
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
