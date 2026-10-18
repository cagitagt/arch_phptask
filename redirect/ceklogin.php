<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=="cagita" && $password="1234"){
        header("Location:beranda.php");
    }else{
        header("Location:gagallogin.php");
    }
}
?>