<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3 border border-2" style="padding: 0;">
        <nav class="navbar border-bottom border-2" style="padding:20px;">
            <a class="navbar-brand" href="/Uas/Home.php">Home</a>
            <div style="text-align: right;">
                <a class="btn btn-light" href="/Uas/Tampil.php">Tampil Data</a>
                <a class="btn btn-light" href="/Uas/Tambah.php">Tambah Data</a>
                <a class="btn btn-light" href="/Uas/Cetak.php">Cetak Data</a>
            </div>
        </nav>
        <br>
        <table class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">Kondisi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //menampilkan semua data dari database
                $query = "SELECT * FROM tb_inventaris";
                $result = $connection->query($query);

                //looping untuk menampilkan data
                while ($row = $result->fetch_assoc()) {
                    echo "
                <tr>
                    <td>$row[no]</td>
                    <td>$row[jenis_kendaraan]</td>
                    <td>$row[merk]</td>
                    <td>$row[tahun]</td>
                    <td>$row[plat]</td>
                    <td>$row[kondisi]</td>
                <tr>
                ";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>


</html>