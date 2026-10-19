<?php
if($_POST){
    $id_kategori=$_POST['id_kategori'];
    $nama_kategori=$_POST['nama_kategori'];

    if(empty($nama_kategori)){
        echo "<script>alert('nama kategori tidak boleh kosong');location.href='editkategori.php';</script>";
    }else {
        include "../koneksi/koneksi.php";
        $update=mysqli_query($koneksi,"update kategori set nama_kategori='".$nama_kategori."' where id_kategori = '".$id_kategori."'") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update data');location.href='kategori.php';</script>";
        } else {
            echo "<script>alert('Gagal update data');location.href='editkategori.php?id_kategori=".$id_kategori."';</script>";
        }
    }
}
?>