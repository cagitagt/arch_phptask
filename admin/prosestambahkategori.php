<?php
    if($_POST){
        $nama_kategori=$_POST['nama_kategori'];
        if(empty($nama_kategori)){
            echo "<script>alert('nama kategori tidak boleh kosong');location.href='tambahproduk.php'</script>";
        }
        else {
            include "../koneksi/koneksi.php";
            $insert=mysqli_query($koneksi,"insert into kategori (nama_kategori)
            value ('".$nama_kategori."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan data');location.href='kategori.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan data');location.href='tambahkategori.php';</script>";
            }
        }
    }
?>