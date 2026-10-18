<?php
include "database.php";
$regist_message = "";
session_start();

// if(isset($_SESSION["username"])){
//     header("Location: dashboard.php");
// }

if(isset($_POST["submit"])){
    $name     = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try{
        $sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
    
        if($db->query($sql)){
            $regist_message = "daftar akun berhasil, silahkan login";
        }else{
            $regist_message = "daftar akun gagal, silahkan coba lagi";
        }
    }catch(mysqli_sql_exception){
        $regist_message = "username sudah ada, coba lagi";
    }
    $db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist page</title>
    <link rel="stylesheet" href="style/regist.css">
</head>
<body>
    <section>
        <div class="left-card">
            <div>
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <a href="login.php">Sign In</a>
                <a href="home.php">Home</a>
            </div>
        </div>
        <div class="right-card">
            <div>
                <h1>Create Account</h1>
                <p>create your account and start journey with us together</p>
                <p id="message"><?= $regist_message ?></p>
                <form action="" method="POST">
                    <input type="text" placeholder="Your Name" name="name" required>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="password" placeholder="Password" name="password" required><br>
                    <button type="submit" name="submit">Register</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>