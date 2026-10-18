<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "simpleloginreg";

//konektifitas dgn database
$db = mysqli_connect($hostname, $username, $password, $database_name);

// Pengecekan koneksi
if($db->connect_error){
    echo "koneksi database tidak bisa";
    die("error!");
}
// echo "koneksi berhasil";
?>