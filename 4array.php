<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <!-- penting, apalagi nanti akan terhubung ke database -->

    <!-- ARRAY
    - variabel yang dpt menampung/memiliki banyak nilai. 
    - Banyak nilai tersebut disimpan dalam satu variabel
    - Tipe data dalam array boleh beda
    - tiap tiap elemen dari array ada index yang dimulai dari 0
    - Pasangan antara key(index dimulai 0) dan value
    -->


    <!-- CARA LAMA -->
        <?php
            $hari = array("Senin","Selasa","Rabu");
        ?>

    <!-- CARA BARU -->
        <?php
            $bulan = ["Januari", "Februari", "Maret"];
            $arr = [123, "Tulisan", false];
        ?>

    <!-- MENAMPILKAN ARRAY -->
        <?php
            // pakai var_dump() atau print_r()
            var_dump ($bulan);
            echo "<br>";
            print_r ($bulan);
        ?>

    <br>

    <!-- MENAMPILKAN SATU ELEMEN -> dengan petunjuk index-->
        <?php
            //$arr = [123, "Tulisan", false]; -> [0][1][2]
            echo $arr[1]; //output: tulisan krn index 1 

            echo "<br>";

            echo $bulan[2]; //Maret
        ?>

    <br>

    <!-- MENAMBAHKAN ELEMEN BARU PADA ARRAY -->
        <?php
            var_dump ($bulan); 
            $bulan[] = "April";
            $bulan[] = "Mei";
            echo "<br>";
            var_dump ($bulan);
        ?>
    <br>

    <!-- VERSI DEBUGGING -> UNTUK DEV/PENGECEKAN BUKAN UNTUK USER pake var_dump() atau print_r()-->
</body>
</html>