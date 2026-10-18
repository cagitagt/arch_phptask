    <?php
    // Tampilan array untuk user
    //PENGULANGAN PADA ARRAY
    // for / foreach -->
   $angka = [2, 14, 25, 49, 68, 98, 69, 9];

    ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY LATIHAN</title>
    <style>
        .main {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear:both;} /*agar turun ke bawah */
    </style>
 </head>
 <body>
    <!-- CARA 1 -> Harus ngubah banyak datanya manual -->
        <?php for($i = 0; $i < 6; $i++) { ?>
            <div class="main"><?php echo $angka[$i]; ?></div>
        <?php } ?>
    

    <div class="clear"></div> <!-- agar floatnya turun-->


     <!-- CARA 2 -> ngubah banyak datanya otomatis-->
        <?php for($i = 0; $i < count($angka); $i++) { ?>
            <div class="main"><?php echo $angka[$i]; ?></div>
        <?php } ?>


    <div class="clear"></div> <!-- agar floatnya turun-->

    <!-- CARA 3  -> 
    pake foreach() -> untuk setiap elemen dalam array lakukan sesuatu

    foreach($books as $book) -> dalam array books(jamak) akan diambil bagian yaitu salah satu 
    yang lalu di simpan di var book(singular) lalu ditampilkan  -->

        <?php foreach($angka as $a) {?>
            <div class="main"><?php echo $a ;?></div>
        <?php } ?>


    <div class="clear"></div> <!-- agar floatnya turun-->


    <!-- CARA 4 -->
     <!-- Cara 3 dengan gaya penulisan templating, agar penulisan lebih ring kas -->
        <?php foreach($angka as $a) :?>
            <div class="main"><?= $a; ?></div>
        <?php endforeach ?>

 </body>
 </html>