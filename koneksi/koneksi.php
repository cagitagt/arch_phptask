<?php
$koneksi = mysqli_connect("localhost","root","","chronicle");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>