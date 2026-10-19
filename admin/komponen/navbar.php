<?php
    session_start();
?>
            <!-- Sidebar-->
            <div class="border-end" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom">Admin</div>
                <div class="list-group list-group-flush">
                  <!-- <a href="dashboard.php" id="sidebar-list">Dashboard</a> -->
                  <a href="user.php" id="sidebar-list">User</a>
                  <a href="berita.php" id="sidebar-list">Berita</a>
                  <a href="kategori.php" id="sidebar-list">Kategori Berita</a>
                  <a href="produk.php" id="sidebar-list">Produk</a>
                  <a href="transaksi.php" id="sidebar-list">Transaksi</a>
                </div>
            </div>
            <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg fixed-top navbar-admin pe-3 ps-3" id="navbar-admin">
                    <div class="container-fluid">
                        <div class="cssanimation blurIn">
                            <h3 class="pe-3" style="color:#EAC738">Chronicle Admin</h3>
                        </div>
                        
                        <i class="fa-solid fa-bars" id="sidebarToggle" style="color:#eeeeee"></i>
                        <!-- <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" style="color:#eeeeee" href="#!">Hello, <?php echo $_SESSION['username'];?></a></li>
                                <li class="nav-item"><a class="nav-link" style="color:#eeeeee" href="konfirmasilogout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/dashboard.js"></script>
