<?php
//SATU DATA MAHASISWA //ARRAY NUMERIK -> PAKAI INDEX ANGKA 
$mahasiswa = ["Cagita Dian", 233140707111078, "Teknologi Informasi", "cagitadian@gmail.com"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY - DAFTAR MAHASISWANYA 1</title>
</head>
<body>
    <!-- TANPA PHP -->
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <li>Cagita Dian</li>
            <li>233140707111078</li>
            <li>Teknologi Informasi</li>
            <li>cagitadian@gmail.com</li>
        </ul>

    <hr>

    <!-- CARA 1 PHP -->
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) { ?>
                <li><?php echo $mhs; ?></li>
            <?php } ?>
        </ul>

    <hr>

    <!-- CARA 2 PHP -->
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) :?>
                <li><?= $mhs;?></li>
            <?php endforeach ?>
        </ul>
    
    <hr>

    <!-- CARA 3 PHP -->
        <h1>Daftar Mahasiswa</h1>
        <ol>
            <li><?= $mahasiswa[0];?></li>
            <li><?= $mahasiswa[1];?></li>
            <li><?= $mahasiswa[2];?></li>
            <li><?= $mahasiswa[3];?></li>
        </ol>
</body>
</html>