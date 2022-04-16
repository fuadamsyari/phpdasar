<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
};
require 'functions.php';
// ambil id
$Id = $_GET["Id"];

// fungsi notifikasi
if (hapus($Id) > 0) {
    echo "
      <script>
        alert('Data berhasi di Hapus');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal di Hapus');
        document.location.href = 'index.php';
      </script>
    ";
};



?>