<script src="https://kit.fontawesome.com/c27ca334fd.js" crossorigin="anonymous"></script>
<?php
    session_start();
    
?>
    <!-- header start -->
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="index.php" style="text-decoration: none;">The Chronicle</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="#about" style="text-decoration: none;">About</a></li>
                        <li><a href="#profile" style="text-decoration: none;">Profile</a></li>
                        <li><a href="#contact" style="text-decoration: none;">Contact</a></li>
                        <li><a href="subscription.php" style="text-decoration: none;">Subscription</a></li>
                        <?php if(isset($_SESSION['status_login'])):?>
                            <?php
                            include "../uas_pemweb_sem2/koneksi/koneksi.php";
                            $query_get_user=mysqli_query($koneksi,"select * from user where id_user= '".$_SESSION['id_user']." ' ");
                             $data_user=mysqli_fetch_array($query_get_user);    
                            ?>
                            <li><a href="blog.php" style="text-decoration: none;">Blog</a></li>
                            <li>Selamat Datang, <?=$data_user ['nama_user']; ?></li>
                            <li><a href="profiluser.php" style="text-decoration: none;"><i class="fa-solid fa-user" style="text-decoration: none;"></i> Profil kamu</a></li>
                            <li><a href="konfirmasilogout.php">
                                    <button class="btn" id="btn-navbar">Log out</button>
                                </a>
                            </li>
                        <?php else: ?>
                            <li><a href="login.php">Log In</a></li>
                            <li><a href="register.php">
                                    <button class="btn" id="btn-navbar">Get Started</button>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div class="burger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->