<?php
require("koneksi/koneksi.php");
if(isset($_POST['proses'])){
    $id_jurusan = $_POST['id'];
    $nama_jurusan = $_POST ['nama'];
    $sql = "UPDATE `jurusan` SET `nama_jurusan`='$nama_jurusan'
            WHERE `id_jurusan`='$id_jurusan'";
    mysqli_query($koneksi,$sql);
    header("Location:index.php");
}
?>