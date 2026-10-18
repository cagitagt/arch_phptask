<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            height: 50px;
            width: 50px;
            background-color: red;  
            font-size: 2rem;
            text-align:center;
            line-height:50px;
            float: left;
            border-radius: 20%;
            margin: 10px;
            transition:0.5s;
            
        }

        .main:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .block {
            clear:both;
        }

    </style>
</head>
<body>
    <h3> CARA 1 </h3>
        <?php for($i = 0; $i < 5; $i++) { ?>
            <div class="main"><?= $i; ?></div>
        <?php } ?>
    
    <div class="block"></div>

    <h3> CARA 2 </h3>
        <?php
            $angka = [1,2,3,4,5,6,7];
        ?>
        <?php foreach($angka as $a) { ?>
            <div class="main"><?= $a; ?></div>
        <?php } ?>


        <div class="block"></div>

    <h3> Menampilkan array dalam array</h3>
    <!-- Menampilkan salah satu angka di dalam di dalam array -->
        <?php
            $numbers = [[1,2,3], [4,5,6], [7,8,9]];
        ?>

        <h4>menampilkan angka 6</h4>
        <?php
           echo $numbers[1][2]; //index bungkus luar lalu index bungkus dalam
        ?>

        <br>   

        <h4>menampilkan semua tapi turun ke bawah</h4>
        <?php foreach($numbers as $number) { ?>
            <?php foreach($number as $n) : ?>
                <div class="main"><?= $n; ?></div>
            <?php endforeach?>

            <div class="block"></div>
        <?php } ?>

</body>
</html>