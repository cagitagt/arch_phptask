<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM POST SATU FILE</title>
</head>
<body>
    <h4>FORM POST SATU FILE</h4>
    <form action="" method="POST">
        Nama anda: <input type="text" name="nama"><br>
        <input type="submit" name="input" value="input">
    </form>

    <?php
    if (isset($_POST['input'])){
        $nama = $_POST['nama'];
        echo "Nama anda adalah <b>$nama</b>";
    }
    ?>
</body>
</html>


<!-- 

isset adalah fungsi bawaan di PHP yang digunakan untuk memeriksa apakah suatu variabel telah diset (diinisialisasi) dan tidak bernilai null.

-->