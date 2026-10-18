<?php
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
    <title>AA - LATIHAN 1</title>
</head>
<body>
    <!-- MENAMPILKAN DATA -->
    <!-- CARA 1 : MANUAL TANPA PHP-->
     <h1>Daftar Mahasiswa</h1>
     <ul>
        <li>Cagita Dian</li>
        <li>233140707111078</li>
        <li>Teknologi Informasi</li>
        <li>cagitadian@gmail.com</li>
     </ul>

     <hr>

    <!-- CARA 2: MENAMPILKAN SALAH SATU MAHASISWA SAJA -->
     <h1>Daftar Mahasiswa</h1>
     <ul>
        <li><?= $mahasiswa[0][0]; ?></li>
        <li><?= $mahasiswa[0][1]; ?></li>
        <li><?= $mahasiswa[0][2]; ?></li>
        <li><?= $mahasiswa[0][3]; ?></li>
     </ul>

     <hr>

     <!-- CARA 3: MENAMPILKAN DENGAN PHP -->
     <h1>Daftar Mahasiswa</h1>
        <?php foreach($mahasiswa as $mhs) {?>
                <ul>
                    <li>Nama : <?= $mhs[0];?></li>
                    <li>NIM : <?= $mhs[1];?></li>
                    <li>Prodi : <?= $mhs[2];?></li>
                    <li>Email : <?= $mhs[3];?></li>
                </ul>
        <?php }?>
</body>
</html>