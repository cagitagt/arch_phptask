<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name  = "db_loginregist";

$db = mysqli_connect($hostname, $username, $password, $db_name);

if($db->connect_error){
    echo "koneksi database tidak bisa nih";
    die("error!");
}
echo "";
?>