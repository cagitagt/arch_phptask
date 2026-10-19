<?php
    //akses file koneksi database
    include('../uas_pemweb_sem2/koneksi/koneksi.php');
    if (isset($_POST['login'])) {
        $user = $_POST['email'];
        $pass = $_POST['password'];
        $email = mysqli_real_escape_string($koneksi, $user);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
        //cek email dan password
        $sql="select * from `user` where `email`='$email' and`password`='$password'";
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);
        if(empty($user)){
            header("Location:index.php?gagal=userKosong");
        }else if(empty($pass)){
            header("Location:index.php?gagal=passKosong");
        }else if($jumlah==0){
            header("Location:index.php?gagal=userpassSalah");
        }else{
            session_start();
            //get data
            while($data = mysqli_fetch_row($query)){
                $id_user = $data[0]; //1
                $nama_user = $data[1]; //2
                $email = $data[0]; //2
                // $level = $data[1]; //speruser
                $_SESSION['id_user']=$id_user;
                $_SESSION['nama_user']=$nama_user;
                $_SESSION['email']=$email;
                $_SESSION['status_login']=true;
                // $_SESSION['level']=$level;
                header("Location:index.php");
            }           
        }
    }
?>
