<?php
    if($_POST){
        $nama_user=$_POST['nama_user'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($nama_user)){
            echo "<script>alert('nama tidak boleh
            kosong');location.href='register.php'</script>";
        }
        elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
        }
        else {
            include "../uas_pemweb_sem2/koneksi/koneksi.php";
            $insert=mysqli_query($koneksi,"insert into user (nama_user, email, password)
            value ('".$nama_user."','".$email."','".md5($password)."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses Mendaftar User, Silahkan lanjutkan ke login');location.href='login.php';</script>";
            }
            else {
                echo "<script>alert('Gagal Mendaftar User');location.href='register.php';</script>";
            }
        }
    }
?>