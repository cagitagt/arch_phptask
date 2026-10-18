<?php
include "database.php";
$login_message = "";
session_start();

if(isset($_SESSION["is_login"])){
    header("Location: dashboard.php");
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    //query untuk menyamakan data sama dgn di database/ga
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    //eksekusi query
    $result = $db->query($sql);

    //cek data ada di database
    if($result->num_rows > 0){
        //identifikasi data siapa
        $data = $result->fetch_assoc();
        //session:var sementara
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;
        
        header("Location: dashboard.php");
        
    }else{
        $login_message = "akun tidak ada";
    }

    // CARA CEK dasar, liat akun ada ganya
    // if($result->num_rows > 0){
    //     echo "akun ada";
    // }else{
    //     echo "akun tidak ada";
    // }


    //cek data ada di database sama ngecek ini datanya siapa pake fetch_assoc()
    // if($result->num_rows > 0){
    //     //identifikasi data siapa
    //     $data = $result->fetch_assoc();
    //     echo "data username adalah: " . $data["username"];
    //     echo " data password adalah: " . $data["password"];
    // }else{
    //     echo "akun tidak ada";
    // }

    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>MASUK AKUN</h3>
    <?= $login_message; ?>
    <?php include "layout/header.html" ?>
    <form action="" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login">Login</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>