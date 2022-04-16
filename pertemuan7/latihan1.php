<?php

$mahasiswa = [
    [   "nama" => "fuad amsyari",
        "nim" => "895734897",
        "jurusan" => "sistem informasi",
        "email" => "fuad@gmail.com",
        "nilai" => [90,80,85,],
        "gambar" => "download.jpg"
    ],
    [
        "nama" => "elsa ulya",
        "nim" => "8957433497",
        "jurusan" => "teknik informatika",
        "email" => "elsa@gmail.com",
        "nilai" => [90,80,85],
        "gambar" => "download.jpg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
            <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"] ?></a></li>
        <?php endforeach ?>
    </ul>
</body>
</html>