<?php
usleep(500000);
require "../functions.php";
$keyword = $_GET["keyword"];
$query = "SELECT * FROM service
        WHERE 
        `Nama_Customer` Like '%$keyword%' OR
        `Jenis_Barang` Like '%$keyword%' OR
        `SN` Like '%$keyword%' OR
        `Nama_Barang` Like '%$keyword%' OR
        `Merek_Barang` Like '%$keyword%'
        ";
$service = query($query);
?>
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
    <tbody class="table-warning">
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