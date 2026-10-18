<?php
$hasil = "";
if(isset($_POST["submit"])){
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];

    $hasil = $angka1 + $angka2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .perhitungan form{
            display: flex;
        }
        input {
            margin-right: 5px;
        }
        p {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="perhitungan">
        <form action="" method="POST">
            <input type="text" name="angka1" size="2">
            <p> + </p>
            <input type="text" name="angka2" size="2">
            <button type="submit" name="submit">Hitung</button>
        </form>
    </div>
    <p>Hasilnya adalah <?php echo $hasil ?></p>
</body>
</html>