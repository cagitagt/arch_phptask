<!DOCTYPE html>
<html>
    <head>
        <title>Admin Chronicle</title>
        <?php include("../admin/komponen/head.php")?>
        <link rel="stylesheet" href="../admin/css/index.css">
        <!-- cssanimation.io -->
        <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex">
            <div class="w-50">
                <img src="../admin/image/background/login_image.png" id="bg-login-admin">
                <h1 class="cssanimation effect3d" id="judul-left">Welcome<br>Back!</br></h1>
            </div>
            <div class="flex-shrink-1 me-auto ms-auto mt-auto mb-auto">
                <form action="konfirmasilogin.php" method="post">
                    <h2 class="mt-4 cssanimation fadeInBottom" id="judul">Login</h2>
                    <p class="cssanimation fadeInBottom" id="subjudul">Welcome back! please login to your account.</p>
                    <div class="mt-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" id="form-control-admin-login" name="email">
                        <div id="emailHelp" class="form-text">Your Email?</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="form-control-admin-login" name="password">
                        <div id="emailHelp" class="form-text">use your correct password</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn" id="btn-submit" name="login">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>