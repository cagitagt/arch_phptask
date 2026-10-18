<!-- Variable Scope /lingkup variabel-->

    <!-- VARIABEL LOKAL -->
    <?php

        $x = 10;
        echo $x;


    echo "<br>";


        //Function x-nya BEDA antara di dalam dan di luar functiion
        function tampilx() {
            $x = 20; //var lokal untuk function itu aja
            echo $x;
        }

        tampilx();
        // output: 10(dari luar function) 20(dari dalam function)
    ?>

    <hr>

    <!-- VARIABEL GLOBAL -->
    <?php

        $y = 10;

        //Function x-nya SAMA antara di dalam dan di luar functiion

        function tampily() {
            global $y;
            echo $y;
        }

        tampily();
        // output: 10 
    ?>

    <hr>

<!-- VARIABEL SUPERGLOBALS -> VAR2 YANG SUDAH DIMILIKI PHP YG BISA DIAKSES DIMANAPUN DAN KAPANPUN DI DIHALAMAN PHP. 
VARIABEL INI MENGGUNAKAN ARRAY ASSOSIATIVE -> key-nya buat sendiri. 
hrs pake var_dump() atau print_r() -->

 <!-- $_GET 
    pengiriman data lwt url dan data trs bisa diambil/ditangkap oleh var superglobal $_GET -->
    <?php
    // // CARA 1
    //     $_GET["nama"] = "Cagita Dian";
    //     $_GET["nim"] ="233140707110";
    //     var_dump($_GET);

    ?>

    <hr>

    <?php
    //CARA 2
        /*memakai url

        jadi data akan dikirim ke url lalu data ditangkap $_GET
        http://localhost/BELAJAR/phpunpas/6getPost.php?name=Leila Dahlia&nim=233140707

        output : array(2) { ["name"]=> string(12) "Leila Dahlia" ["nim"]=> string(9) "233140707" }
    
        ? -> saya akan masukkan data ke halaman ini
        & -> tambahan data lain
        name=Leila Dahlia -> key = value var_dump($_GET);*/

        var_dump($_GET);
    ?>

    <hr>

 <!-- $_POST -->
    <?php
    //beda dari get, kalo get lwwat URL, kalo post datanya dikirim lewat Form. 
    //tapi jika form bisa pake get juga. 
    //(+) -> saat ngirim data di url datanya ga bakalan keliatan, misal untuk LOGIN maka harus pake post agar disembunyikan username dan passnya


    ?>

 <!-- $_SESSION -->

 <!-- $_COOKIE -->

 <!-- $_REQUEST -->

 <!-- $_SERVER -->
<?php
// var_dump($_SERVER); //isinya otomatis ttg informasi server kita
echo $_SERVER["SERVER_NAME"]; //ngasih tau termasuk server apa
?>
 <!-- $_ENV -->
  
    