<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
};

require 'functions.php';
$service = query("SELECT * FROM service ORDER BY Id DESC");
// set default time zone
date_default_timezone_set("Asia/Jakarta");
$timestamp = time();
$tanggal =  date("d-M-Y",$timestamp);
// logic search
// ketika tombol cari di klik
if (isset($_POST["cari"])) {
  # code...
  $service = cari($_POST["keyword"]);
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body, html {
        background-color: #e1ebe2;
      } 
    </style>
</head>
<body>

<!-- navabar -->
<nav class=" navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <form class="d-flex" action="" method="POST">
        <input class="form-control me-2" type="text" name="keyword" placeholder="Cari Data Service" autocomplete="off" aria-label="Search">
        <button class="btn btn-warning" type="submit" name="cari">Cari</button>
      </form>
    </div>
  </div>
</nav>
<!-- akhir navbar -->
<!-- tabel -->
<div class="container-fluid ">
  <div class="row">
    <div class="col-md-6">
      <h1>Data Service</h1>
      <br>
    </div>
    <div class="col-md-6  d-flex justify-content-end">
      <h3 class="float-md-left"><?= $tanggal ?></h3>
    </div>
  </div>
  <div class="row">
    <div class="col 0-md-3 d-flex justify-content-start">
      <a href="tambah.php" class="btn btn-warning">Tambah Data</a>
    </div>
    <div class="col 0-md-3 d-flex justify-content-end">
      <a href="logout.php" class="btn btn-success">Log Out</a>
    </div>
  </div>
  <br>
    <!-- start table -->
    <table class="table table-warning table-striped">
      <thead class="table-success table-bordered">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Aksi</th>
          <th scope="col">Nama Customer</th>
          <th scope="col">Jenis Barang</th>
          <th scope="col">SN</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Merek Barang</th>
          <th scope="col">Telephone</th>
          <th scope="col">Service</th>
          <th scope="col">Keluar</th>
          <th scope="col">Biaya</th>
          <th scope="col">Laba</th>
          <th scope="col">Ket/Foto</th>
          </tr>
      </thead>
      <tbody calass="table-warning">
          <?php $i = 1; ?>
          <?php foreach($service as $svc) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="ubah.php?Id=<?= $svc["Id"]; ?>" class="btn btn-info btn-sm">Edit</a>
                    <a href="hapus.php?Id=<?= $svc["Id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data Akan di Hapus!!!');">Hapus</a>
                  </div>
                </td>
                <td><?= $svc["Nama_Customer"]; ?></td>
                <td><?= $svc["Jenis_Barang"] ?></td>
                <td><?= $svc["SN"] ?></td>
                <td><?= $svc["Nama_Barang"] ?></td>
                <td><?= $svc["Merek_Barang"] ?></td>
                <td><?= $svc["Telephone"] ?></td>
                <td><?= $svc["Service"] ?></td>
                <td><?= $svc["Keluar"] ?></td>
                <td><?= $svc["Biaya"] ?></td>
                <td><?= $svc["Laba"] ?></td>
                <td>
                  <img src="img/<?= $svc["Ket/Foto"] ?>" alt="">
                </td>
            </tr>
          <?php $i++ ?>
          <?php endforeach ?>
      </tbody>
    </table>
</div>
<!-- akhir tabel -->







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>