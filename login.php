<?php
include "database.php";
$login_message = "";
session_start();

// if(isset($_SESSION["is_login"])){
//     header("Location: dashboard.php");
// }

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    $result = $db->query($sql);

    if($result->num_rows > 0){
        $data = $result->fetch_assoc();

        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;

        header("Location: dashboard.php");
    }else{
        $login_message = "akun tidak ada, coba lagi";
    }
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <section>
        <div class="right-card">
            <div>
                <h1>Sign In</h1>
                <p>welcome back! use your account and continue journey with us!</p>
                <p id="message"><?= $login_message ?></p>
                <form action="" method="POST">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="password" placeholder="Password" name="password" required><br>
                    <button type="submit" name="submit">Sign In</button>
                </form>
            </div>
         </div>
        <div class="left-card">
            <div>
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <a href="register.php">Register</a>
                <a href="home.php">Home</a>
            </div>
        </div>
    </section>
</body>
</html>