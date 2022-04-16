<?php
// koneksi ke data base
// nama host, username, password, nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

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


?>