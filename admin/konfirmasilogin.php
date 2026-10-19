<?php
    //akses file koneksi database
    include('../koneksi/koneksi.php');
    if (isset($_POST['login'])) {
        $admin = $_POST['email'];
        $pass = $_POST['password'];
        $email = mysqli_real_escape_string($koneksi, $admin);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
        //cek adminname dan password
        $sql="select * from `admin` where `email`='$email' and`password`='$password'";
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);
        if(empty($admin)){
            header("Location:index.php?gagal=adminKosong");
        }else if(empty($pass)){
            header("Location:index.php?gagal=passKosong");
        }else if($jumlah==0){
            header("Location:index.php?gagal=adminpassSalah");
        }else{
            session_start();
            //get data
            while($data = mysqli_fetch_row($query)){
                $id_admin = $data[0]; //1
                $username = $data[1]; //2
                // $level = $data[1]; //speradmin
                $_SESSION['id_admin']=$id_admin;
                $_SESSION['username']=$username;
                // $_SESSION['level']=$level;
                header("Location:user.php");
            }           
        }
    }
?>
