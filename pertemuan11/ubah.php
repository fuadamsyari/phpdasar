<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan
$Id = $_GET["Id"];
// ambil data berdasarkan Id dari database
$ygMaudiedit = query("SELECT * FROM service WHERE Id = $Id");

if (isset($_POST["submit"])) {
  // cek apakah data berhasil ditambhakan atau tidak
  if (ubah($_POST,$Id) > 0) {
    echo "
      <script>
        alert('Data berhasi di Ubah');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal di Ubah');
      </script>
    ";
  };
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- akhir navbar -->
<!-- form -->
    <br>
    <h2 class="text-center">Edit data Service</h2>
    <br>
<!-- start form -->
    <div class="container">
      <form action="" method="POST" > 
        <div class="row">
          <div class="col side" >
            <div class="md-6">
                <label for="Nama Customer" class="form-label">Nama Customer</label>
                <input type="text" class="form-control" required name="Nama Customer" Value="<?= $ygMaudiedit[0]["Nama_Customer"] ?>" >
            </div>
            <div class="md-6">
                <label for="Jenis Barang" class="form-label">Jenis Barang</label>
                <select required name="Jenis Barang" class="form-select">
                    <option selected="selected"><?= $ygMaudiedit[0]["Jenis_Barang"] ?></option>
                    <option>Laptop</option>
                    <option>Komputer</option>
                    <option>Printer InkJet</option>
                    <option>Printer Laser</option>
                    <option>Printer Dot Matrix</option>
                </select>
            </div>
            <div class="md-6">
                <label for="Serial Number" class="form-label">Serial Number</label>
                <input type="text" class="form-control" required name="SN" Value="<?= $ygMaudiedit[0]["SN"] ?>" >
            </div>
            <div class="md-6">
                <label for="Nama Barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" required name="Nama Barang"  Value="<?= $ygMaudiedit[0]["Nama_Barang"] ?>" >
            </div>
            <div class="md-6">
                <label for="Merek Barang" class="form-label">Merek Barang</label>
                <input type="text" class="form-control" required name="Merek Barang"  Value="<?= $ygMaudiedit[0]["Merek_Barang"] ?>" >
            </div>
            <div class="md-6">
                <label for="Telephone" class="form-label">Telephone</label>
                <input type="number" class="form-control" required name="Telephone"  Value="<?= $ygMaudiedit[0]["Telephone"] ?>" >
            </div>
          </div>
          <div class="col side">
            <div class="md-6">
                <label for="Service" class="form-label">Service</label>
                <input type="text" class="form-control" required name="Service"  Value="<?= $ygMaudiedit[0]["Service"] ?>" >
            </div>
            <div class="md-6">
                <label for="Keluar" class="form-label">Keluar</label>
                <input type="number" class="form-control" required name="Keluar"  Value="<?= $ygMaudiedit[0]["Keluar"] ?>" >
            </div>
            <div class="md-6">
                <label for="Biaya" class="form-label">Biaya</label>
                <input type="number" class="form-control" required name="Biaya"  Value="<?= $ygMaudiedit[0]["Biaya"] ?>" >
            </div>
            <div class="md-6">
                <label for="Laba" class="form-label">Laba</label>
                <input type="number" class="form-control" required name="Laba"  Value="<?= $ygMaudiedit[0]["Laba"] ?>" >
            </div>
            <div class="md-6">
                <label for="Ket/Foto" class="form-label">Keterangan/Foto</label>
                <input type="text" class="form-control" required name="Ket/Foto" value="<?= $ygMaudiedit[0]["Ket/Foto"] ?>" >
            </div>
            <br>
            <div class="d-grid gap-2">
              <button type="submit" name="submit" class="justify-conten-center btn btn-success d-grid gap-2">Tambah</button>
            </div>
          </div>
        </div>
      </form>
    </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>