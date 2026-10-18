<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN CONTROL FLOW TABEL</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>

</head>
<body>
    <!-- CARA MANUAL -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
    </table>

    <hr>

    <!-- CARA LOOPING PHP -->
    <!-- CARA 1 -->
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php
            for($i = 1; $i <= 3; $i++) {
                echo "<tr>";

                    for($j =1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }

                echo "</tr>";
            }
        ?>
        <!-- $i = baris, $j = kolom -->
    </table>

    <br>

    <!-- CARA 2 -->
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for($a = 1; $a <= 3; $a++) { ?>
            <tr>
                <?php for($b = 1; $b <= 5; $b++) { ?>
                    <td><?php echo "$a,$b"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <br>

    <!-- CARA 3 -->
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for($c = 1; $c <= 3; $c++) : ?>
            <tr>
                <?php for($d = 1; $d <= 5; $d++) : ?>
                    <td><?php echo "$c,$d"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <!-- mengganti {} dengan : dan endfor, endfor tergantung jenis looping -->

    <br>

    <!-- CARA 3 TABEL WARNA WARNI -->
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for($x = 1; $x <= 5; $x++) { ?>

            <?php if($x % 2 == 1 ) : ?> <!--pake modulus agar tercipta hasil ganjil. jika ganjil kasi wana, kalau tidak gausa-->
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>

                    <?php for($y = 1; $y <= 5; $y++) { ?>
                        <td><?php echo "$x,$y";?></td>
                    <?php }?>

                </tr>
        <?php } ?>
    </table>

     
</body>
</html>