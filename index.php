<?php
include ('koneksi/connection.php');

$message = '';

if(isset($_POST['submit'])){
    $name  = $_POST['name'];
    $nim   = $_POST['nim'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    $advice = $_POST['advice'];

    $query = "INSERT INTO users (name, nim, email, class, gender, advice) VALUES ('$name', '$nim', '$email', '$class', '$gender', '$advice')";
    if(mysqli_query($conn, $query)){
        $message = "Your data has been saved";
    }else{
        $message = "An error occurred while saving the data";
    }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contact-form">
        <h1>Contact Form</h1>

        <?php if($message): ?>
            <p style="color: red;"><?php echo $message; ?></p>
        <?php endif;?>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td><input type="text" name="class" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
                <tr>
                    <td>Advice</td>
                    <td><input type="textarea" name="advice" id="advice" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>

            
        </form>
    </div>
    
</body>
</html>