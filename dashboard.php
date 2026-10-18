<?php
    session_start();
    if(isset($_POST['logout'])){
        session_unset(); //untuk nge-clear semua datanya
        session_destroy(); //untuk menghancurkan datanya

        //untuk ngarahin ke halaman home
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman dashboard</title>
</head>
<body>
    <?php include "layout/header.html"?>

    <h1>HELLO WORD! INI DASHBOARD</h2>
    <h3>halo <?= $_SESSION["username"] ?></h3>

    <form action="dashboard.php" method="post">
        <button type="submit" name="logout">logout</button>
    </form>

    <?php include "layout/footer.html"?>
</body>
</html>