<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>textpass</title>
</head>
<body>
    <h3>type text dan password</h3>
    <form action="" method="POST">
        Username : <input type="text" name="name"><br>
        Password : <input type="password" name="pass">
        <input type="submit" name="login" value="Login">
    </form>

    <?php
        if(isset($_POST['login'])){
            $username = $_POST["name"];
            $password = $_POST["pass"];

            if($username=="cagita"&&$password=="123"){
                echo "Login berhasil, hai <b>$username</b>";
            }else{
                echo "Login gagal";
            }
        }
    ?>
</body>
</html>