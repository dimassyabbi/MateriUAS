<?php include 'koneksi.php'; ?>
<?php
// inislisasi variable dengan isian kosong dengan nama variable sesuai pada value di input
$jenis_kendaraan = "";
$merk = "";
$tahun = "";
$plat = "";
$kondisi = "";

//inilisasi variable untuk pengisian inputan kosong dan berhasil disimpan
$errorMessage = "";
$successMessage = "";

//cek kondisi isian pada input ketika proses penyimpanan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jenis_kendaraan = $_POST["jenis_kendaraan"];
    $merk = $_POST["merk"];
    $tahun = $_POST["tahun"];
    $plat = $_POST["plat"];
    $kondisi = $_POST["kondisi"];

    // pengecekan dengan perulangan untuk tiap inputan
    do {
        if (empty($jenis_kendaraan) || empty($merk) || empty($tahun) || empty($plat) || empty($kondisi)) {
            $errorMessage = "Semua inputan harus di isi";
            break;
        }
        // menambahkan data pelanggan ke database
        $query = "INSERT INTO tb_inventaris (jenis_kendaraan, merk, tahun, plat, kondisi )
        VALUES ('$jenis_kendaraan', '$merk', '$tahun', '$plat', '$kondisi')";
        $result = $connection->query($query);
        //jika terjadi kesalahan saat proses penyimpanan
        if (!$result) {
            $errorMessage = "Invalid query" . $connection->error;
            break;
        }
        $jenis_kendaraan = "";
        $merk = "";
        $tahun = "";
        $plat = "";
        $kondisi = "";

        $successMessage = "Data berhasil ditambahkan";
        header("location: /app-myshop/index.php");
        exit;
    } while (false);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

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
        <h3 style="margin: 20px;">Tambah Data Baru</h3>
        <!-- menampilkan pesan eror jika terdapat inputan kosong -->
        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post" style="margin: 20px;">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Kendaraan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="jenis_kendaraan">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Merk</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="merk">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="tahun">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Plat Nomor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="plat">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kondisi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kondisi">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="index.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>