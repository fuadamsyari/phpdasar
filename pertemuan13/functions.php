<?php
// koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// mengambil data dari database untuk di tempilkan di index.php
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
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
    // upload gambar
    $Ket = upload();
    if (!$Ket) {
        return false;
    };
    // query insert data
    // coneksi , query
    $queryInsert = "INSERT INTO service VALUE ('', '$Nama_Customer', '$Jenis_Barang', '$SN', '$Nama_Barang', '$Merek_Barang', '$Telephone', '$Service', '$Keluar', '$Biaya', '$Laba', '$Ket');";
    mysqli_query($conn,$queryInsert);
    return mysqli_affected_rows($conn);
};
// fungsi upload
function upload(){
    $namaFile = $_FILES["Ket/Foto"]["name"];  
    $namaTmp = $_FILES["Ket/Foto"]["tmp_name"];   
    $namaEror = $_FILES["Ket/Foto"]["error"];   
    $size = $_FILES["Ket/Foto"]["size"];
    // melakukan poengencekan untuk fungsi upload  gambar
    // cek apakah tidak ada gambar yang di upload
    if ( $namaEror === 4 ) {
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    };
    // pengecekan
    // cek apakah yang di upload adalkah gambar atau bukan
    // persyaratan ekstrensi gambar
    $ekstensiGambarValid = ['jpg','jeg','png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert('Yang anda Upload bukan gambar');
            </script>
        ";
        return false;
    };
    // cek ukuran pada gambar yang diupload
    // cek apakah ukuran gambar lebih dari 1mb
    if ( $size > 1000000 ) {
        echo "
            <script>
                alert('Gambar yang anda upload terlalu besar, Pastikan gambar berukuran dibawah 1 MB');
            </script>
        ";
        return false;
    };
    // lolos pengecekan
    // gemerate nama baru untuk foto yuang telah di upload
    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $ekstensiGambar;
    move_uploaded_file($namaTmp, "img/". $namaBaru);
    return $namaBaru;
};



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
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // apakah user pilih gamabar tidak
    if ($_FILES["Ket/Foto"]['error'] === 4) {
        # code...
        $Ket = $gambarLama;
    } else {
        $Ket = upload();
    };
    
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