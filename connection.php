<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "loginsimple"; 
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>


<!-- 
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "Connection Successful";
-->