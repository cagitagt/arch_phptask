<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINTAKS</title>
</head>
<body>
    <?php
    //SINTAKS PHP//

    //STANDAR OUTPUT//
    /*standar -> echo, print, 
    untuk bugging/tau kesalahan di mana -> print_r (ngeprint array), var_dump (ngelihat isi variable) */
    echo "Cagita Dian";
    print " A'yunin";
    print_r (" Leila");
    var_dump ("Dahlia");//output:ngasih tau tipe data + jmlh/ukuran

    echo 123; //ANGKA
    echo true; //BOOLEAN, True=1, False=(kosong) 

    //STRING bisa salah satu  "",'' .echo "jum'at" (nulis benar). DISARANKAN ""
    ?>

<hr>

    <!--PENULISAN SINTAKS DI PHP-->
    <!--1. PHP di dalam HTML -->
        <h1>Halo, selamat datang <?php echo "Cagita";?></h1>
        <p><?php echo "ini adalah php";?></p>
    <!--2. HTML di dalam PHP -->
        <?php
        echo "<h2>Halo, Selamat datang Gita</h2>"
        ?>  

<hr>

    <!-- VARIABEL DAN TIPE DATA -->
    <?php
    /*cukup menuliskan $variabel. 
    gaperlu mendefinisikan tipe data
    tidak boleh diawali dgn angka, tapi boleh mengandung angka*/
        $nama = "Cagit";
        echo $nama;

        //Perbedaan "" dan ''
        echo "<p> Halo, saya $nama </p>"; //out: Halo, saya Cagit
        echo 'Halo, saya $nama'; //out: Halo, saya $nama
    ?>

<hr>

    <!-- //OPRATOR// -->

    <!--1. ARITMATIKA -->
    <?php
        // + - * %
        $x = 10;
        $y = 20;
        echo $x + $y;
    ?>

<hr>

    <!--2. PENGGABUNG STRIING/ CONCATENATION/ CONCAT-->
    <?php
        // Menggunakan titik(.)
        $nama_depan = "Cagita";
        $nama_belakang = "Dian";
        echo $nama_depan . " " . $nama_belakang;
    ?>

<hr>

    <!--3. ASSIGNMENT  -->
    <?php
        // =, +=, *=(kali), /=,(bagi) %=(sisa bagi), .=(penggabung)
        $x = 1;
        $x = 5;
        echo $x; //out: 5, krn 1 ditimpa 5

        $y = 1;
        $y += 5;
        echo $y; //out: 6, 1+5=6

        $nama = "Cagita";
        $nama .= " ";
        $nama .= "Dian";
        echo $nama; //out: Cagita Dian
    ?>

<hr>

    <!--4. PERBANDINGAN -->
    <?php
        // <, >, <=, >=, ==(sama dengan), !=(tidak sama dengan)
        //biasanya dipake saat pengkondisian, output:boolean(T/F)
        var_dump(1<5); //out: bool(True)
        var_dump(1>5); //out: bool(False)
        var_dump(1 == 5); //out: bool(False)
        var_dump(1 == "1"); //out: bool(True), krn ga liat tipe data
    ?>

<hr>

    <!--5. IDENTITAS -->
    <?php
        // ===, !==
        var_dump(1 === "1") //out: bool(False), karena beda tipe data, int dan string
    ?>
    
<hr>

    <!-- 6. LOGIKA -->
    <?php
        //&&(dan, semua hrs bener), ||(or, salah satu bener maka bener), !(not)
        $x=10;
        var_dump($x < 20 && $x % 2 == 0); //out: bool(true)
        // [10 < 20(T)] dan [sisa bagi 10:2 adalah 0(T)], jadi T && T =T
    ?>
    
</body>
</html>