<?php
// koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// mengambil data dari database untuk di tempilkan di index.php
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        # code...
        $rows[] = $row;
    }
    return $rows;
}   
// tambah data mengggunakan post untuk di kirim dari tambah.php ke datrabase
function tambah ($data){
    global $conn;
    // am,bil data dari tiap elemen form
    $Nama_Customer = htmlspecialchars($data["Nama_Customer"]);
    $Jenis_Barang = htmlspecialchars($data["Jenis_Barang"]);
    $SN = htmlspecialchars($data["SN"]);
    $Nama_Barang = htmlspecialchars($data["Nama_Barang"]);
    $Merek_Barang = htmlspecialchars($data["Merek_Barang"]);
    $Telephone = htmlspecialchars($data["Telephone"]);
    $Service = htmlspecialchars($data["Service"]);
    $Keluar = htmlspecialchars($data["Keluar"]);
    $Biaya = htmlspecialchars($data["Biaya"]);
    $Laba = htmlspecialchars($data["Laba"]);
    $Ket = htmlspecialchars($data["Ket/Foto"]);
    // query insert data
    // coneksi , query
    $queryInsert = "INSERT INTO service VALUE ('', '$Nama_Customer', '$Jenis_Barang', '$SN', '$Nama_Barang', '$Merek_Barang', '$Telephone', '$Service', '$Keluar', '$Biaya', '$Laba', '$Ket');";
    mysqli_query($conn,$queryInsert);
    return mysqli_affected_rows($conn);
}
// fungsi hapus untuk menghapus isi database
function hapus ($Id){
    global $conn;
    mysqli_query($conn, "DELETE FROM service WHERE id = $Id");

    return mysqli_affected_rows($conn);
}
// fungsi ubah untukj mengedit datr base
function ubah ($data,$Id){
    global $conn;
    // ammbil data dari tiap elemen form
    $Nama_Customer = htmlspecialchars($data["Nama_Customer"]);
    $Jenis_Barang = htmlspecialchars($data["Jenis_Barang"]);
    $SN = htmlspecialchars($data["SN"]);
    $Nama_Barang = htmlspecialchars($data["Nama_Barang"]);
    $Merek_Barang = htmlspecialchars($data["Merek_Barang"]);
    $Telephone = htmlspecialchars($data["Telephone"]);
    $Service = htmlspecialchars($data["Service"]);
    $Keluar = htmlspecialchars($data["Keluar"]);
    $Biaya = htmlspecialchars($data["Biaya"]);
    $Laba = htmlspecialchars($data["Laba"]);
    $Ket = htmlspecialchars($data["Ket/Foto"]);
    // query rubah  data
    $queryInsert = "UPDATE `service` SET 
	`Nama_Customer` = '$Nama_Customer',
    `Jenis_Barang` = '$Jenis_Barang', 
    `SN` = '$SN', 
    `Nama_Barang` = '$Nama_Barang', 
    `Merek_Barang` = '$Merek_Barang', 
    `Telephone` = '$Telephone', 
    `Service` = '$Service', 
    `Keluar` = '$Keluar', 
    `Biaya` = '$Keluar', 
    `Laba` = '$Laba', 
    `Ket/Foto` = '$Ket' 
    WHERE `Id` = $Id";
    mysqli_query($conn,$queryInsert);
    return mysqli_affected_rows($conn);
}
// fungsi cari
function cari($keyword){
    $syarat = "SELECT * FROM service
        WHERE 
        `Nama_Customer` Like '%$keyword%' OR
        `Jenis_Barang` Like '%$keyword%' OR
        `SN` Like '%$keyword%' OR
        `Nama_Barang` Like '%$keyword%' OR
        `Merek_Barang` Like '%$keyword%'
    ";
    return query($syarat);
}

?>