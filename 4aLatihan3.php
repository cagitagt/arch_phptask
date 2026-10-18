<?php
    //BANYAK MAHASISWA //ARRAY NUMERIK -> PAKAI INDEX ANGKA 
    //Pakai Array multidimensi -> didalem array ada array
    $mahasiswa = [
        ["Cagita Dian", 233140707111078, "Teknologi Informasi", "cagitadian@gmail.com"],
        ["Leila Dahlia", 233140707111079, "Teknologi Informasi", "leila@gmail.com"],
        ["Aliyah Putri", 233140707111080, " Informatika", "aaliyah@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY - LATIHAN 2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama :<?= $mhs[0]; ?></li>
            <li>nim  :<?= $mhs[1]; ?></li>
            <li>prodi:<?= $mhs[2]; ?></li>
            <li>email:<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>