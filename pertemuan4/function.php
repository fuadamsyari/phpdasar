<?php


function waktu(){
    // ambil data jam (+0)
    $jam = date("H");
    // logika untuk menentukan malam, pagi, siang, malam
    if ($jam > 0 && $jam <= 4) {
        $hasil =  "malam";
    } elseif ($jam > 4 && $jam <= 11) {
        $hasil =  "pagi";
    } elseif ($jam > 11 && $jam <=15) {
        $hasil =  "siang";
    } elseif ($jam >15 && $jam <= 18) {
        $hasil =  "sore";
    } elseif ($jam > 18 && $jam <= 24) {
        $hasil =  "malam";
    } else {   
        $hasil =  "format jam salah";
    }
    // kembalikan hasil dari logika
    return $hasil;
};


function salam($nama = "admin", $kapan="datang"){
    // muat hasil fungsi logika pagi, siang, sore, malam
    $kapan = waktu();
    // terapkan untuk teks
    return "selamat , $kapan $nama!";
};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>



    <h1><?= salam();  ?></h1>
    <h1><?= salam("fuad", waktu());  ?></h1>



</body>
</html>






