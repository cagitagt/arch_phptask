<?php
    include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="card">
            <h1>Login Form</h1>
            <form action="login.php" method="post" name="form">
                <label for="">Username</label>
                <input type="text" name="user" id="" required>
                <br><br>
                <label for="">Password</label> 
                <input type="password" name="pass" id="" required>
                <div class="button-container">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>