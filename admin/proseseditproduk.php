<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $harga_produk=$_POST['harga_produk'];
    $deskripsi_produk=$_POST['deskripsi_produk'];

    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='editproduk.php';</script>";
 
    } elseif(empty($harga_produk)){
        echo "<script>alert('harga produk boleh kosong');location.href='editproduk.php';</script>";
    }else {
        include "../koneksi/koneksi.php";
        $update=mysqli_query($koneksi,"update produk_langganan set nama_produk='".$nama_produk."', deskripsi_produk='".$deskripsi_produk."', harga_produk='".$harga_produk."' where id_produk = '".$id_produk."'") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update data');location.href='produk.php';</script>";
        } else {
            echo "<script>alert('Gagal update data');location.href='editproduk.php?id_produk=".$id_produk."';</script>";
        }
    }
}
?>