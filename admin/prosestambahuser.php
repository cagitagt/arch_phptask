<?php
    if($_POST){
        $nama_user=$_POST['nama_user'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $no_telp=$_POST['no_telp'];
        $bio=$_POST['bio'];
        $id_produk=$_POST['id_produk'];
        if(empty($nama_user)){
            echo "<script>alert('nama tidak boleh
            kosong');location.href='tambahuser.php'</script>";
        }
        elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='tambahuser.php';</script>";
        }
        else {
            include "../koneksi/koneksi.php";
            $insert=mysqli_query($koneksi,"insert into user (nama_user, email, password, no_telp, bio, id_produk)
            value ('".$nama_user."','".$email."','".md5($password)."','".$no_telp."','".$bio."','".$id_produk."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan data');location.href='user.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan data');location.href='tambahuser.php';</script>";
            }
        }
    }
?>