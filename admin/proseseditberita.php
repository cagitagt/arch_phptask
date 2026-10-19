<?php
include '../koneksi/koneksi.php';

    $id_berita=$_POST['id_berita'];
    $nama_berita=$_POST['nama_berita'];
    // $id_admin=$_POST['id_admin'];
    $id_kategori=$_POST['id_kategori'];
    $konten_berita=$_POST['konten_berita'];

    $temp=$_FILES['foto_berita']['tmp_name'];
    $type=$_FILES['foto_berita']['type'];
    $size=$_FILES['foto_berita']['size'];
    $name= rand(0,9999).$_FILES['foto_berita']['name'];
    $folder = 'image/foto/';

    $sql = "select * from berita where id_berita = '$id_berita'";
    $query = mysqli_query($koneksi, $sql);
    $berita= mysqli_fetch_array($query);
    $path = $folder.$berita["foto_berita"];

    if (file_exists($path)) {
        unlink($path);
    }

    if ($size < 999999999999 and ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg")) {
        move_uploaded_file($temp, $folder . $name);
        $update=mysqli_query($koneksi,"update berita set nama_berita='".$nama_berita."', id_kategori='".$id_kategori."', foto_berita='".$name."', konten_berita='".$konten_berita."' where id_berita = '".$id_berita."'") or die(mysqli_error($koneksi));
        if ($update) {
            echo "<script>alert('Berhasil');location.href='berita.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='editberita.php';</script>";
        }
    } else {
        echo "<script>alert('File tidak Sesuai');location.href='editberita.php';</script>";
    }
    
?>