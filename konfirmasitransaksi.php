<?php
    include "../uas_pemweb_sem2/koneksi/koneksi.php";
    $query_get_produk=mysqli_query($koneksi,"select * from produk_langganan where id_produk= '".$_GET['id_produk']." ' ");
     $data_produk=mysqli_fetch_array($query_get_produk); 

    // $query_get_user=mysqli_query($koneksi,"select * from user where id_user= '".$_SESSION['id_user']." ' ");
    //  $data_user=mysqli_fetch_array($query_get_user); 
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Chronicle</title>
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
            <form method="post" action="prosestransaksi.php">
                <div class="card" id="card-wrapper">
                    <div class="card-header">
                    <h3>Confirm your Order</h3>
                        <img src="img/member/member_2.jpg" alt="ilustration 1">
                        <input type="hidden" name="id_produk" value="<?=$data_produk ['id_produk']; ?>">
                        <input type="hidden" name="id_user" value="<?=$data_user ['id_user']; ?>">
                        <h2><?=$data_produk ['nama_produk']; ?></h2>
                    </div>
                    <div class="card-body">
                        <div  class="card-detail" id="card-detail">
                            <p><span class="fas fa-check check"></span>  Read member-only stories</p>
                            <p><span class="fas fa-check check"></span>  Support writers you read most</p>
                            <p><span class="fas fa-check check"></span>  Listen to audio narrations</p>
                        </div>
                        <div class="card-price" id="card-price">
                            <p><sup>Rp.</sup><?=$data_produk ['harga_produk']; ?><sub>/<?=$data_produk ['nama_produk']; ?></sub></p>
                            <br>
                        <button type="submit" name="tambahdata"  class="card-button">Confirm Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <script>AOS.init();</script>
    </body>
</html>