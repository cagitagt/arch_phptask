<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/join.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="prosesregisteruser.php" method="post">
            <h2>Register</h2>
            <div class="input-box">
                <input type="text" placeholder="Masukkan nama kamu" name="nama_user" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Masukkan email kamu" name="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password yang sulit yaa!" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <!-- <div class="remember-forgot">
                <label><input type="checkbox">remember me</label>
                <a href="#">Forgot password?</a>
            </div> -->

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Have an account? <a href="login.php">Login</a></p>
            </div>
        </form>

    </div>
</body>
</html>