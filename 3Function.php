<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTION</title>
</head>
<body>
    <!-- 
    Function -> potongan program yang mudahin saat mrogram. bisa dipanggil berkali kali -->

    <!-- BUILT-IN FUNCTION -> sudah di sediakan php -->

    <!-- DATE/TIME -->

        <!--1. time() -->
            <?php
                // echo time(); 
                // out: UNIX Timestamp/EPOCH time, waktu di sepakati di dunia komputer, detik yg telah berlalu sejak 1 januari 1970 - sekarang


                //TAMPILKAN HARI
                //cara Manual menampilkan 2 hari lagi hari apa
                echo date("l", time() + 172800);//tampilkan hari = hari ini + 172800 (2 hari)

                //cara php suruh ngitung 90 hari lagi hari apa
                echo date("l", time() + 60*60*24*90);
                
                //cara php suruh ngitung 90 hari lalu hari apa
                echo date("l, d-M-Y", time() - 60*60*24*90);
            ?>

        <br>

        <!--2. date() -->
            <?php
                echo date("l, d-M-Y");
                //parameter : l : hari, d : tanggal, M : bulan (nama bulan), m : urutan bulan (angka), Y : tahun 
            ?>

        <br>

        <!--3. mktime()-->
            <?php
                //membuat sendiri detik yg tlh berlalu
                //mktime(0, 0, 0, 0, 0, 0);
                //jam, menit, detik, bulan, tanggal tahun

                //misal tanggal lahir
                echo mktime(0,0,0,9,11,2003);

                //hari itu hari apa
                echo date("l", mktime(0,0,0,9,11,2003));
            ?>

        <br>

        <!--4. strtotime()-->
            <?php
                //sama kayak mktime tapi ini langsung tulis tanggal
                    echo date("l", strtotime("11 sep 2003"));
            ?>

    <!-- STRING

         1. strlen() -> menghitung panjang string
         2. strcmp() -> membandungkan string
         3. explode() -> memecah string jadi array
         4. htmlspecialchars() -> menjaga file dari hacker
    -->

    <!-- UTILITY/FUNGSI BANTUAN
        1. var_dump() -> mencetak isi dari var/arrray/objek
        2. isset() ->  ngecek apakah var pernah di bikin/ga. hasil boolean. ga pernah bikin -> false
        3. empty() -> ngecek ada tidaknya isi var 
        4. die() -> memberhentikan program. jadi program di bawahanya ga dieksekusi
        5. sleep() -> untuk memberhentikan sementara sesuai waktu yang diinginkan
    -->

    <hr>
    
    <!-- USER-DEFINED FUNCTION -> user buat sendiri fungsinya-->
        <!-- hrs di definisikan dahulu -->
        <!-- Membuat ucapan selamat sesuai waktu dan sesuai nama (dinamis)
        -->
            <?php //() -> parameter = buat masukin nilainya/varnya
                function salam($waktu, $nama){
                    return "Selamat $waktu, $nama";
            }

            ?>
            <!-- pemanggilan -->
            <h1> <?php echo salam("Sore", "Cagita"); ?></h1>

            <hr>

            <!-- DENGAN DEFAULT

            bisa mengirim parameter default jika tidak ada data yang dimasukkan-->
            <?php //() -> parameter = buat masukin nilainya/varnya
                function salamm($waktu = "Datang", $nama = "Admin"){
                    return "Selamat $waktu, $nama";
            }

            ?>
            <!-- pemanggilan -->
            <h1> <?php echo salamm("Malam"); ?></h1> <!--parameter var salamm kosong -->
            



            <hr>



            
            <?php
                function welcome($nama = "User") {
                    return "Halo, $nama";
                }
            ?>
            <h1><?php echo welcome("Cagita");?></h1>
</body>
</html>