<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
    <h3>radio</h3>
    <form action="" method="POST">
        <h4>Pilih Jenis Kelamin Anda</h4>
        <input type="radio" name="gender" value="Laki-laki">Laki - laki <br>
        <input type="radio" name="gender" value="Perempuan">Perempuan <br> <br>
        <input type="submit" name="pilih" value="pilih">
    </form>

    <?php
        if(isset($_POST["pilih"])){
            $jenis_kelamin = $_POST["gender"];
            echo "Jenis Kelamin Anda: $jenis_kelamin";
        }
    ?>
</body>
</html>