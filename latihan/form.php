<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="cekLogin.php" method="POST">
        <label>nama</label>
        <input type="text" name="nama"><br>
        <label>email</label>
        <input type="text" name="email"><br>
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password">
        <input type="submit" value="Kirim" name="submit">
    </form>
</body>
</html>