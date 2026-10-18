<!-- BUAT HALAMAN ADMIN, BISA LIHAT SEMUA DATA MAHASISWA, BISA MENAMBAH, MENGHAPUS, MENGUBAH, MENCARI. 
 
DISINI HANYA BISA MELIHAT DAN MENAMBAH SAJA-->

<?php

//1. KONEKSI KE DATABASE//
/*function("nama host","username mysql","password","nama database");*/
$conn = mysqli_connect("localhost","root","","phpunpas"); //disimpan di var $conn agar saat ambil data tidak terlalu panjang


//2. AMBIL DATA DARI TABEL MAHASISWA/ QUERY DATA MAHASISWA//
/*function(koneksi ke databasenya, querynya mau apa);
mysqli_query(mysqli_connect("localhost","root","","phpunpas"), "select * from mahasiswa");*/
$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); // disimpan ke var $result


//3. NGECEK//
/*jika berhasil -> query akan dilakukan dan mengembalikan true (akan keluar datanya) 
kalo gagal -> tidak akan menjalankan query dan mengembalikan false*/

//var_dump($result);
//berhasil -> object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(6) ["lengths"]=> NULL ["num_rows"]=> int(4) ["type"]=> int(0) }


// //4. NGECEK ERROR//
//     if(!$result) {
//         echo mysqli_error($conn);
//     }


// //---------------------------------------------------------------------- 
// /*analogi anak ingin lihat isi [lemari baju ibunya($result)], karena yang diminta isinya dari [lemari baju ibunya($result)] maka [lemari baju ibunya($result)] dibuka dulu lalu liatkan bajunya bukan bawa lemari ibunya*/


// //AMBIL DATA(fetch) MAHASISWA DARI OBJECT RESULT, ADA BEBERAPA CARA YAITU:

// ///mysqli_fetch_row() -> mengembalikan array numerik (indexnya angka)
// $a = mysqli_fetch_row($result);
// var_dump($a);
// var_dump($a[1]); //out: index 1 -> Nama krn sesuai urutan row (id(0), nama(1), nim(2), email(3), jurusan(4), gambar(5))

// echo "<br>";

// ///mysqli_fetch_assoc() -> mengembalikan array associative (langsung tulis  nama indexnya, pingin nampilin bagian apa)
// $b = mysqli_fetch_assoc($result);
// var_dump($b["nim"]); // out: nampilin nim-nya langsung

// echo "<br>";

// ///mysqli_fetch_array() -> mengembalikan array dengan numerik dan associative (fleksible), 
// //(-) -> kalo nampilin semua datanya bakalan banyak banget karena double
// $c = mysqli_fetch_array($result);
// var_dump($c["email"]); //out: emailnya
// var_dump($c[3]); //out: emailnya

// echo "<br>";

// ///mysqli_fetch_object() -> mengembalikan object gaada numerik atau associative jadi harus langsung dituju
// $d = mysqli_fetch_object($result);
// var_dump($d->jurusan);

// echo "<hr>";
// //---------------------------------------------------------------------- 


//5. AMBIL DATA PAKE ASSOC
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nama"]); //out: yang ditampilin cuma satu

/*ibu udah bener bukain lemarin dan nunjukin baju, tapi hanya yang paling atas saja, sedangkan baju dilemari banyak. pengennya ambil kasih liat, ambil kasih liat. pakai cara looping*/

// //looping
// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs["nama"]); //output: semua nama akan muncul
//     echo "<br>";
//     var_dump($mhs); // semua data akan muncul
// };

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <hr>

    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?> <!--untuk looping nomor urut (bukan id)-->
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td> <!--untuk looping nomor urut (bukan id)-->
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="pict/<?= $row["gambar"]; ?>" width="150px">
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>

        <?php $i++; ?> <!--untuk looping nomor urut (bukan id) jadi nanti nomor urut otimatis nambah terus jika ada data masuk-->
    <?php endwhile ?>






        
        <!-- <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="pict/cagit.jpg" width="150px">
            </td>
            <td></td>
            <td>Cagita Dian</td>
            <td>Email</td>
            <td>Jurusan</td>
        </tr> -->
    </table>
</body>
</html>
