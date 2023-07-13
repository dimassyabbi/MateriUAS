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
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="text-center">
                    <img src="Foto.jpg" class="rounded-circle" alt="Foto Profil" width="150">
                    <h4 class="mt-3">Dimas Syabbi Alfaaz</h4>
                    <p class="text-muted">Teknik Informatika</p>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">NIM</th>
                            <td>22.240.0036</td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>Denasri Wetan,Batang</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>dimassyabbi@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">No. Telepon</th>
                            <td>1234567890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>