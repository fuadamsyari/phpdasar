// ambil elemen yang kita butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var tabel = document.getElementById('tabel');

// menambahkan event ketika mau menulis
keyword.addEventListener('keyup', function () {
  // membuat objek ajax
  var xhr = new XMLHttpRequest();
  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      tabel.innerHTML = xhr.responseText;
    }
  };
  // eksekusi ajax
  xhr.open('GET', 'ajax/service.php?keyword=' + keyword.value, true);
  xhr.send();
});
