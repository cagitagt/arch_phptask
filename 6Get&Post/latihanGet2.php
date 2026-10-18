<?php
//cek apakah tidak ada data di $_GET
// pakai isset -> untuk cek apakah var pernah dibuat?
//error terjadi saat, misal $_get["nama"] belum dibikin tapi udah suruh buka/cetak 
//! -> not/tidak
// || -> dan

//if(isset($_GET["judul"])) { -> apakah $_GET["judul"] sudah pernah dibikin? maka
//if(!isset($_GET["judul"])) { -> apakah $_GET["judul"] belum pernah dibikin? maka


if( !isset($_GET["judul"]) ||
    !isset($_GET["rilis"]) ||
    !isset($_GET["terbit"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["pict"])) { //apakah belum pernah dibikin? jika belum maka
    //redirect -> memaksa user untuk berpindah halaman
    header("Location: latihanGet.php"); //dipakse ke halaman ini
    exit; //diakhiri dengan exit agar script dibawahnya tidak di eksekusi
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["pict"]; ?>"width="170px"></li>
        <li>Judul  : <?= $_GET["judul"]; ?></li>
        <li>Rilis  : <?= $_GET["rilis"]; ?></li>
        <li>Terbit : <?= $_GET["terbit"]; ?></li>
        <li>Harga  : <?= $_GET["harga"]; ?></li>
    </ul>

    <!-- "judul"  => "Filosofi Teras",
            "penulis"=> "Henry",
            "rilis"  => "8 Oktober 2021",
            "terbit" => 2015,
            "pict"   => "filosofi.jpg",
            "harga"  => 96000
        ], -->
</body>
</html>