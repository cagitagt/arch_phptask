<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRUKTUR KENDALI</title>
</head>
<body>
    <!-- 
    CONTROL FLOW
    alur ketika program di baca interpreter PHP
    Normalnya : atas ke bawah, kiri ke kanan, tapi dgn adanya ini bisa diatur
    -->
<hr>
<hr>
    <!-- PENGULANGAN 
    ingin mengerjakan sebuah blog program tampa menulis ulang-->
    <!-- inisialisasi(variabel awal), kondisi terminasi(memberhentikan perulangan), incremen/decrement(alurnya maju/mundur) -->

    <!--1. FOR -> MENGULANGI SEJUMLAH-->
    <?php
        for($i = 0; $i < 5; $i++) {
            echo "$i Hello World! <br> ";
        }
    ?>

    <br>

    <!--2. WHILE -> CEK KONDISI DULU BARU JALAN. Selama kondisi bernilai T, maka akan eksekusi -->
    <?php
        $i = 0;
        while($i < 5) {
            echo " HelloWorld ";
        $i++; //kalo gada ini looping selamanya
        }
    ?>

    <br>

    <!--3. DO.. WHILE -> JALAN DULU BARU CEK KONDISI. lakukan ini selama kondisi True. PASTI ADA OUTPUT WALAU SATU WALAU KONDISI SALAH-->
    <?php
        $i = 10;
        do {
            echo " HelloWorld ";
        $i++;
        } while ($i < 5);
    ?>

    <!--4. FOREACH (untuk array) -->

<hr>
<hr>
    <!-- PENGKONDISISAN -> apayang terjadi jika membuat pernyataan jika T maka x, jika F maka y -->

    <!--1. IF.. ELSE -> jika T lakukan, jika F lakukan yang lain -->
    <?php
        $z = 10;
        if($z > 5){
            echo "Benar, z lebih dari 5";
        } else {
            echo "Salah";
        }
    ?>

    <br>

    <!--2. IF.. ELSE IF.. ELSE -> ada beberapa kondisi -->
    <?php
        $z = 20;
        if($z < 10 ){
            echo "Benar, z lebih dari 5";
        } else if($z == 20) {
            echo "Bingo!";
        } else {
            echo "Salah";
        }
    ?>

    <br>

    <!--3. TERNARY -->


    <br>
    
    <!--4. SWITCH -> meringkas jika if nya terlalu banyak-->
    <?php 
        $fruit = "Apple";
        switch ($fruit) {
            case "Orange":
                echo "Aku suka Orange";
                break;
            case "Banana":
                echo "Aku suka Banana";
                break;
            case "Melon":
                echo "Aku suka Melon";
                break;
            case "Apple":
                echo "Aku suka Apple";
                break;
            default :
                echo "Aku ga suka semua";  
        }


    ?>
    
</body>
</html>