<?php

// time
// date untuk menempilkan tanggal dalam format tertentu

//  echo date("l,d-m-y");


// time
// unix time stamp
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();


// echo date("l,d m y", time()+60*60*24*100);
 

// MKTIME
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,12,13,2001));


// strtotime
echo date("l, d-m-y", strtotime("13 dec 2001"));







?>