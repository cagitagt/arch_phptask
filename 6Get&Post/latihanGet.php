<?php
    $books = [
        [
            "judul"  => "Laut Bercerita",
            "penulis"=> "Leila",
            "rilis"  => "8 Oktober 2021",
            "terbit" => 2022,
            "pict"   => "laut.jpg",
            "harga"  => 80000
        ],
        [
            "judul"  => "Atomic Habit",
            "penulis"=> "James Clear",
            "rilis"  => "8 Oktober 2021",
            "terbit" => 2012,
            "pict"   => "atomic.jpg",
            "harga"  => 77000
        ],
        [
            "judul"  => "Madilog",
            "penulis"=> "Tan Malaka",
            "rilis"  => "9 Maret 2021",
            "terbit" => 1967,
            "pict"   => "madilog.jpg",
            "harga"  => 130000
        ],
        [
            "judul"  => "Filosofi Teras",
            "penulis"=> "Henry",
            "rilis"  => "8 Oktober 2021",
            "terbit" => 2015,
            "pict"   => "filosofi.jpg",
            "harga"  => 96000
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <!-- membuat -> judul yang ketika di pencet bisa masuk ke detail judul buku -->
    <ul>
        <?php foreach($books as $book){ ?>
            <li>
                <a href="latihanGet2.php?judul=<?= $book["judul"]; ?>&penulis=<?php $book["penulis"]; ?>&rilis=<?= $book["rilis"]; ?>&terbit=<?= $book["terbit"]; ?>&harga=<?= $book["harga"]; ?>&pict=<?= $book["pict"]; ?>"><?= $book["judul"]; ?></a>
            </li>
        <?php }?>
    </ul>


    <!-- CATATAN 
     folder latihan.php
      <a href="latihan2.php?iniharussama=<?= $book["judul"];?>"><?= $book["judul"]; ?></a>

      folder latihan2.php
      <li><?= $_GET["iniharusama"]; ?></li>

      .....
      <a href="latihan2.php?{judul=<?= $book["judul"]; ?>&penulis=<?php $book["penulis"]; ?>&rilis=<?= $book["rilis"]; ?>"> -> nanti mau dilempar ke mana} {<?= $book["judul"]; ?>} -> yang dipencet agar ke detail</a>
      -->
</body>
</html>