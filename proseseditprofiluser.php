<?php
if($_POST){
    $id_user=$_POST['id_user'];
    $nama_user=$_POST['nama_user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $no_telp=$_POST['no_telp'];
    $bio=$_POST['bio'];

    if(empty($nama_user)){
        echo "<script>alert('nama tidak boleh kosong');location.href='profiluser.php';</script>";
 
    } elseif(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='profiluser.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='profiluser.php';</script>";
    }
    else {
        include "../uas_pemweb_sem2/koneksi/koneksi.php";
        $update=mysqli_query($koneksi,"update user set nama_user='".$nama_user."', email='".$email."', password='".md5($password)."', no_telp='".$no_telp."', bio='".$bio."' where id_user = '".$id_user."'") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update data');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal update data');location.href='index.php?id_user=".$id_user."';</script>";
        }
    }
}
?>