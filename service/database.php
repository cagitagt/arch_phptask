<!--pengaturan agar tau database mana yang mau di connect-->

<?php  //ini deklarasi bawaan xampp
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "buku_tamu"; //nyambungin ke database yang kita mau

    //mengkoneksi
    $db = mysqli_connect($hostname, $username, $password, $database_name);
/*
    //buat nge-make sure dia connect (optional)
    if($db->connect_error){
        echo "koneksi database rusak beb";
        die("error!"); //untuk mematikan koneksi database
    }
        echo "koneksi berhasil";
*/
        
?>