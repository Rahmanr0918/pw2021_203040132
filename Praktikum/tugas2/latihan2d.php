<?php
function hitungDeterminan($a, $b, $c, $d)
{

    echo "<table cellspacing='5' cellspading='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
            <td>$c</td>
            <td>$d</td>
            </tr>
        </table>";
    echo "<br>";
    echo "<b>Determinan dari matriks tersebut adalah " . (($a * $d) - ($b * $c)) . "</b>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2d</title>
</head>

<body>
    <?php echo hitungDeterminan(1, 2, 3, 4); ?>
</body>

</html>