<!-- 
 Form yang menggunakan metode post hanya bisa dieksekusi dengan menggunakan button bertipe submit. Pemanggilan nilai dapat dilakukan dengan $_POST pada nama masing-masing field.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGISI DATA LEWAT FORM</title>
</head>
<body>
    <form action="" method="post">
        <label>NIM   :</label>
        <input type="text" name="nim"> <br>
        <label>Nama  :</label>
        <input type="text" name="nama"> <br>
        <label>Prodi :</label>
        <input type="text" name="prodi"> <br>
        <input type="submit" name="kirim" value="Submit">
    </form>
</body>
</html>


<?php
if(isset($_POST["kirim"])){
    $nim  = $_POST["nim"];
    $name = $_POST["nama"];
    $prodi = $_POST["prodi"];
    echo "NIM   : $nim" . "<br>";
    echo "Nama  : $name <br>";
    echo "prodi : " . $prodi . "<br>";
}
?>