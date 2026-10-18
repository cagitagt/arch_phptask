<!-- BUAT HALAMAN ADMIN 2, BISA LIHAT SEMUA DATA MAHASISWA, BISA MENAMBAH, MENGHAPUS, MENGUBAH, MENCARI. 
DISINI HANYA BISA MELIHAT DAN MENAMBAH SAJA-->

<!-- Menggunakan Beda Analogi. saat anak mau liat isi lemari baju ibunya, ibunya menyiapkan dulu di dalam lalu disimpen di wadah, jadi ibunya ga perlu bawa lemri untuk nunjukkin -->

<?php
//MENGHUBUNGKAN KONEKSI DATABASE DARI BEDA FILE
require 'index2functions.php';

//MENGHUBUNGKAN MEKANISME QUERY, JADI BUAT FUNCTION BERNAMA QUERY YANG ISINYA TINGGAL PANGGIL MAU APA
query("SELECT * FROM MAHASISWA");




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
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
