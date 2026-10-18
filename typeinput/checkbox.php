<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>
<body>
    <h3>checkbox</h3>
    <form action="" method="POST">
        <h4>Pilih Hobi Anda :</h4>
        <input type="checkbox" name="hobi1" value="Olahraga">Olahraga <br>
        <input type="checkbox" name="hobi2" value="Membaca">Membaca <br>
        <input type="checkbox" name="hobi3" value="Menulis">Menulis <br>
        <input type="submit" name="pilih" value="pilih"> <br> <br>
    </form>

    <?php
    if(isset($_POST["pilih"])){
        echo "Hobi anda adalah : <br>";
        if(isset($_POST['hobi1'])){
            echo '+ ' . $_POST['hobi1'] . '<br>';
        }
        if(isset($_POST['hobi2'])){
            echo '+ ' . $_POST['hobi2'] . '<br>';
        }
        if(isset($_POST['hobi3'])){
            echo '+ ' . $_POST['hobi3'] . '<br>';
        }
    }
    ?>
</body>
</html>