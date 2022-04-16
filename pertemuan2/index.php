<?php
// ini komentar


// standar output
// echo
// print_r
// var_dump


echo'fuad';
print_r('fuad amsyari');
var_dump('ahmad fuad amsyari');

// penuliasan sintraks php
// 1. php di dalam html
// 2. html di dalam php]



// variabel dan tipe data
// variabel
// tidak boleh di awalai angka, tapi boleh mengandung angka 
$nama = "ahmad fuad amsyari";
echo 'nama saya $nama';
echo "nama saya $nama";


// operrator aritmatika
// + - / * %
$x = 10;
$y = 20;

echo $x * $y;



// operator pengganbunbg string / concat
// .
$nama_depan = "ahmad";
$nama_belakang = "fuad amsyari";

echo $nama_depan . " " . $nama_belakang; 

// asigment
// = , += , -=, *= , /= , %= , .=

// opearator perbandingan\
//  < > <= >= == !=

var_dump(1 < 5);

// operator indentitas
// === !===
var_dump(1 === "1");


// opeartor logika
// && || !

$x= 30;
var_dump($x != 110);
var_dump($x < 10 && $x % 2== 0);
var_dump($x < 10 || $x % 2== 0);

?>