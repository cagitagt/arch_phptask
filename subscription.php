<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="stylesheet" href="./styles/subscription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/responsive.css">
    <!-- Animate on Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <?php include "navbar.php" ?>
    <section class="subscription" data-aos="fade-up" data-aos-duration="1000">
    <?php
        include "../uas_pemweb_sem2/koneksi/koneksi.php";
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $query_produk = mysqli_query($koneksi, "select * from produk_langganan where id_produk = '$cari' or nama_produk like '%$cari%' ");
        }
        else{
            $query_produk = mysqli_query($koneksi, "select * from produk_langganan");
        }
        while($data_produk = mysqli_fetch_array($query_produk)){
    ?>
                <div class="card" id="card-wrapper">
                    <div class="card-header">
                        <img src="img/member/member_1.jpg" alt="ilustration 2">
                        <h2><?=$data_produk['nama_produk']?></h2>
                    </div>
                    <div class="card-body">
                        <div  class="card-detail" id="card-detail">
                            <p><span class="fas fa-check check"></span>  Read member-only stories</p>
                            <p><span class="fas fa-check check"></span>  Support writers you read most</p>
                            <p><span class="fas fa-check check"></span>  Listen to audio narrations</p>
                        </div>
                        <div class="card-price" id="card-price">
                            <p><sup>Rp.</sup><?=$data_produk['harga_produk']?><sub>/<?=$data_produk['nama_produk']?></sub></p>
                            <a href="konfirmasitransaksi.php?id_produk=<?=$data_produk['id_produk']?>" style="text-decoration: none;"><button class="card-button">Select</button></a>
                        </div>
                    </div>
                </div>
    <?php
        }
    ?>
                <!-- <div class="card" id="card-wrapper">
                    <div class="card-header">
                        <img src="img/member/member_2.jpg" alt="ilustration 1">
                        <h2>Yearly</h2>
                    </div>
                    <div class="card-body">
                        <div  class="card-detail" id="card-detail">
                            <p><span class="fas fa-check check"></span>  Read member-only stories</p>
                            <p><span class="fas fa-check check"></span>  Support writers you read most</p>
                            <p><span class="fas fa-check check"></span>  Listen to audio narrations</p>
                            <p><span class="fas fa-check check"></span>  Read member-only stories</p>
                        </div>
                        <div class="card-price" id="card-price">
                            <p><sup>Rp.</sup>450.000<sub>/year</sub></p>
                        </div>
                        <button class="card-button">Select</button>
                        
                        
                    </div>
                </div> -->
    </section>
    <script>AOS.init();</script>
</body>
</html>