<?php
include "database.php";
$regist_message = "";
session_start();

if(isset($_SESSION["username"])){
    header("Location: dashboard.php");
}

if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];


    try {
        // query insert data ke database
        $sql = "INSERT INTO users (username, password, name) VALUES ('$username', '$password', '$nama')";

        //eksekusi lalu cek data masuk db atau tdk
        if($db->query($sql)){
            $regist_message = "daftar akun berhasil, silahkan login";
        }else{
            $regist_message = "daftar akun gagal, silahkan coba lagi";
        }

    }catch(mysqli_sql_exception){
        $regist_message = "username sudah ada, coba lagi";
    }


    //CARA SIMPLE CEK DATA
    //eksekusi lalu cek data masuk db atau tdk
    // if($db->query($sql)){
    //     echo "data berhasil masuk database";
    // }else{
    //     echo "data gagal masuk database";
    // }
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <h3>DAFTAR AKUN</h3>
    <i><?= $regist_message; ?></i>
    <?php include "layout/header.html" ?>
    <form action="" method="POST">
        <input type="text" placeholder="name" name="nama">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">Register Now!</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>