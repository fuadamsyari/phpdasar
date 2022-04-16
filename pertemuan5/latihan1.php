<?php
// array
// variabel yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda\
// pasangan anatara key dan value
// key-nya adalah index, yang dimuali dari 0



// membuat arrray
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru 
$bulan = ["januari", "februari", "maret"];
$arr1 = [123 , "tulisan", false];


// menampilkan array
// var dump, dan print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// memnampilakn 1 elemen denagan echo
// echo $hari[1];

// menambahkan isi array di akhir
print_r($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
print_r($hari);







?>