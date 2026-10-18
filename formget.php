<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GET SAMA FILE</title>
</head>
<body>
    <h4>FORM GET SAMA FILE</h4>
    <form action="" method="GET">
        Nama : <input type="text" name="nama">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if (isset($_GET['submit'])){
            $name = $_GET['nama'];
            
            echo "Nama anda adalah <b>$name</b>";
        }
    ?>
</body>
</html>