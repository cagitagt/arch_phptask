<html>
    <head>
        <title>Admin Chronicle</title>
        <link rel="stylesheet" href="../admin/komponen/navbar.css">
        <link rel="stylesheet" href="../admin/css/allfile.css">
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- font -->
        <style>@import url('https://fonts.googleapis.com/css2?family=Cactus+Classical+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');</style>
        <script src="https://kit.fontawesome.com/c27ca334fd.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Page content wrapper-->
        <div class="d-flex" id="wrapper">
            <?php include "../admin/komponen/navbar.php" ?>
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                        <div class="row mt-4">
                            <div class="col-sm-3">
                                <div class="card" id="card">
                                    <div class="card-body">
                                        <p>Total Pelanggan</p>
                                        <h2>20</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" id="card">
                                    <div class="card-body">
                                        <p>Total Berita</p>
                                        <h2>20</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" id="card">
                                    <div class="card-body">
                                        <p>Total Admin</p>
                                        <h2>20</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" id="card">
                                    <div class="card-body">
                                        <p>Total Transaksi</p>
                                        <h2>20</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../admin/komponen/navbar.js"></script>
    </body>
</html>