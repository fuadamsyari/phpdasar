<?php
// koneksi ke data base
// nama host, username, password, nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM service");
// ambil data isi dari result 
// mysqli_fetch_row mengembalikan array numerik
// mysqli_fetch_assoc mengembalikan array asositif
// mysqli_fetch_array mengembalikan keduanya
// mysqli_fetch_object mengembalikan objek


// mengeluarkan semua dengan while
// while ($db = mysqli_fetch_assoc($result)) {
//     # code...
//     var_dump($db);

// }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- navabar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- akhir navbar -->
<!-- tabel -->
<div class="container-fluid">
    <br>
    <h2>Data Service</h2>
    <br>

    <!-- start table -->
    <table class="table">
    <thead>
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
    <tbody>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            
        <tr>
            <th scope="row"><?= $i; ?></th>
            <td><a href="">Hapus</a> | <a href="">Edit</a></td>
            <td><?= $row["Nama Customer"] ?></td>
            <td><?= $row["Jenis Barang"] ?></td>
            <td><?= $row["SN"] ?></td>
            <td><?= $row["Nama Barang"] ?></td>
            <td><?= $row["Merek Barang"] ?></td>
            <td><?= $row["Telephone"] ?></td>
            <td><?= $row["Service"] ?></td>
            <td><?= $row["Keluar"] ?></td>
            <td><?= $row["Biaya"] ?></td>
            <td><?= $row["Laba"] ?></td>
            <td><?= $row["Ket/Foto"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
    </tbody>
    </table>


</div>
<!-- akhir tabel -->







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>