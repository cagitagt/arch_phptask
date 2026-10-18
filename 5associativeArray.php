<?php
 //ARRAY ASSOCIATIVE
 //definisinya sama seperti array numerik taoi key-nya adalah string yang kita buat sendiri -->
    $mahasisw = [
        "nama" => "Cagita Dian", 
        "nim" => "233140707111078", 
        "prodi" => "Teknologi Informasi",
        "email" => "cagita@gmail.com"
    ];

    echo $mahasisw["email"];
 ?>

 <hr>

 <?php
    $mahasiswa = [
        [     
            "nama" => "Cagita Dian", 
            "nim" => "233140707111078", 
            "prodi" => "Teknologi Informasi",
            "email" => "cagita@gmail.com",
            "pict" => "pic1.jpg",
            "tugas" => [88, 90, 70]
        ],
        [     
            "nama" => "Leila Dahlia", 
            "nim" => "233140707111079", 
            "prodi" => "Sistem Informasi",
            "email" => "leila@gmail.com",
            "pict" => "pic2.jpg",
            "tugas" => [70, 88, 89]
        ],
        [     
            "nama" => "Aliyah Putri", 
            "nim" => "233140707111080", 
            "prodi" => "Informatika",
            "email" => "aaliyah@gmail.com",
            "pict" => "pic3.jpg",
            "tugas" => [90, 80, 90]
        ]
    ];

    //nampilin nama leila
    echo $mahasiswa[1]["nama"]; //numerik(index) dulu lalu asosiatif(buat sendiri)
    //nampilan nilai aliyah yang 80
    echo "<br>";
    echo $mahasiswa[2]["tugas"][1];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSOCIATIVE ARRAY</title>
    <style>
        ul {
            background-color: grey;
            width: 220px;
            height: 220px;
            padding: 10px;
        }

    </style>
 </head>

 <body>
    <hr>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["pict"];?>" alt="pict" width="100px">
            </li>
            <br>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Prodi: <?= $mhs["prodi"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Tugas 2: <?= $mhs["tugas"][1];?></li>
        </ul>
    <?php } ?>
    
 </body>
 </html>