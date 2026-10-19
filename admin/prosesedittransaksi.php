<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $id_produk=$_POST['id_produk'];

    if(empty($id_produk)){
        echo "<script>alert('produk tidak boleh kosong');location.href='edittransaksi.php';</script>";
    }else {
        include "../koneksi/koneksi.php";
        $update=mysqli_query($koneksi,"update transaksi set id_produk='".$id_produk."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update data');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal update data');location.href='edittransaksi.php?id_transaksi=".$id_transaksi."';</script>";
        }
    }
}
?>