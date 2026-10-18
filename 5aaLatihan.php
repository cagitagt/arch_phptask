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
    <title>Toko BUKU - ARRAY</title>
</head>
<body>
    <?php
    //nampilin buku tan malaka -> madilog
    echo $books[2]["judul"];
    ?>

    <hr>

    <?php foreach($books as $book) { ?>
        <ol>
            <li>
                <img src="img/<?= $book["pict"];?>" width="150px">
            </li>
            <li><?= $book["judul"]; ?></li>
            <li><?= $book["penulis"]; ?></li>
            <li><?= $book["rilis"]; ?></li>
            <li><?= $book["terbit"]; ?></li>
            <li><?= $book["harga"]; ?></li>
        </ol>
    <?php } ?>
</body>
</html>