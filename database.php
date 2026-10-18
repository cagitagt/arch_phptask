<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "crud_akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);
// cek koneksi
if (!$koneksi) {
    die("tidak bisa terkoneksi ke database");
} else {
    echo ""; //koneksi berhasil
}

?>