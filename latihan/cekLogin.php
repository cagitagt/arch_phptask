<?php
if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if($user=="cagita"&&$pass="1234"){
        header("Location: profil.php");
    }
}
?>