<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Area</title>
</head>
<body>
    <h3>TextArea</h3>
    <form action="" method="POST">
        <h2>Saran anda :</h2>
        <textarea name="saran" id="" cols="40" rows="5"></textarea><br>
        <input type="submit" name="qirim" value="kirim">
    </form>
</body>
</html>

<?php
if(isset($_POST["qirim"])){
    $saranuser = $_POST["saran"];
    echo "Saran anda adalah $saranuser";
}
?>