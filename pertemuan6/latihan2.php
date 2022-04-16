<?php
 

//  $mahasiswa = [
//     ["fuad amsyari", "867458376", "sistem informasi", "fuad@gmail.com" ],
//     ["elsa mualimatu", "348975934", "teknik informatika", "elsa@gmail.com"]
// ];

// array asosiatif
// definisisnya sama seperti array numerik, hanya key-nya adalah string
$mahasiswa = [
    [   "Nama" => "fuad amsyari",
        "NIM" => "895734897",
        "jurusan" => "sistem informasi",
        "Email" => "fuad@gmail.com",
        "Nilai" => [90,80,85],
        "gambar" => ["download.jpg"]
    ],
    [
        "Nama" => "elsa ulya",
        "NIM" => "8957433497",
        "jurusan" => "teknik informatika",
        "Email" => "elsa@gmail.com",
        "Nilai" => [90,80,85],
        "gambar" => ["download.jpg"]
    ]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
</head>
<body>
    <h4>Data Mahasiswa</h4>
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="<?= $mhs["gambar"]?>" alt="">
        </li>
        <li>Nama: <?= $mhs["Nama"]?></li>
        <li>NIM: <?= $mhs["NIM"]?></li>
        <li>Jurusan: <?= $mhs["jurusan"]?></li>
        <li>Email: <?= $mhs["Email"]?></li>
    </ul>
<?php endforeach ?>





</body>
</html>