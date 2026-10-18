<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM POST BEDA FILE</title>
</head>
<body>
    <h4>FORM POST BEDA FILE</h4>
    <form action="proses.php" method="POST">
        Nama : <input type="text" name="nama"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<!-- 
GET digunakan untuk mengambil informasi yang dikirim lewat url

Penanganan form menggunakan GET maka method harus bernilai GET dan pengambilan data pada elemen menggunakan $_GET
-->