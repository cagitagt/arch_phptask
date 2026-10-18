<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    

    include("connection.php");
    if (isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];   

        $sql = "select * from users where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location:home.php");
        }else{
            echo '<script>
                window.location.href = "index.php";
                alert("Login Failed. Please input valid username and password!")
            </script>';
        }


    }
?>
