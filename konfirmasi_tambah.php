<?php
require("koneksi/koneksi.php");
if(isset($_POST['proses'])){
    $id_jurusan = $_POST['id'];
    $nama_jurusan = $_POST ['nama'];
    $sql = "INSERT INTO `jurusan` (`id_jurusan`,`nama_jurusan`)
            VALUES ('$id_jurusan','$nama_jurusan')";
    mysqli_query($koneksi,$sql);
    header("Location:index.php");
}
?>