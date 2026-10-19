<?php
include '../koneksi/koneksi.php';

    $nama_berita=$_POST['nama_berita'];
    $id_admin=$_POST['id_admin'];
    $id_kategori=$_POST['id_kategori'];
    $konten_berita=$_POST['konten_berita'];
    // $foto=$_FILES['foto']['name'];

    $temp=$_FILES['foto_berita']['tmp_name'];
    $type=$_FILES['foto_berita']['type'];
    $size=$_FILES['foto_berita']['size'];
    $name= rand(0,9999).$_FILES['foto_berita']['name'];
    $folder = 'image/foto/';


    if ($size < 999999999999 and ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg")) {
        move_uploaded_file($temp, $folder . $name);
        $input = mysqli_query ($koneksi, "INSERT INTO berita (nama_berita, id_admin, id_kategori, foto_berita, konten_berita) VALUES ('".$nama_berita."', '".$id_admin."', '".$id_kategori."', '".$name."', '".$konten_berita."')");
        if ($input) {
            echo "<script>alert('Sukses tambah data');location.href='berita.php';</script>";
        } else {
            echo "<script>alert('Gagal tambah data');location.href='tambahberita.php';</script>";
        }
        
    } else {
        echo "<script>alert('File tidak Sesuai');location.href='tambah_berita.php';</script>";
    }
    
?>