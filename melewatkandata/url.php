<!--
teknik passing variabel -> lewat URL
variabel dan value muncul di url browser

var 1 =< pakai tanda &
Pemanggilan nama variabel menggunakan $_GET[‘nama_variabel’].

[URL]?variabel1=nilai1&varibel2=nilai2;
ex : http://localhost/BELAJAR/modulbusalnan/melewatkandata/url.php?nim=233140&nama=cagita&prodi=ti
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGISI DATA LEWAT URL</title>
</head>
<body>
    <?php
    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $prodi = $_GET['prodi'];
    echo "NIM   : " . $nim . "<br>";
    echo "Nama  : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    ?>
</body>
</html>