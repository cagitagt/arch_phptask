<?php
    if($_POST){
        $nama_produk=$_POST['nama_produk'];
        $harga_produk=$_POST['harga_produk'];
        $deskripsi_produk=$_POST['deskripsi_produk'];
        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh
            kosong');location.href='tambahproduk.php'</script>";
        }
        elseif(empty($harga_produk)){
            echo "<script>alert('harga produk tidak boleh kosong');location.href='tambahproduk.php';</script>";
        }
        else {
            include "../koneksi/koneksi.php";
            $insert=mysqli_query($koneksi,"insert into produk_langganan (nama_produk, harga_produk, deskripsi_produk)
            value ('".$nama_produk."','".$harga_produk."','".$deskripsi_produk."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan data');location.href='produk.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan data');location.href='tambahproduk.php';</script>";
            }
        }
    }
?>