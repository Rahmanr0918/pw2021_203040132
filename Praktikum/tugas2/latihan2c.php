<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2c</title>
</head>
<style>
    .bola {
        display: inline-block;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        margin: 2px;
        border: 2px solid black;
        border-radius: 20px;
        background-color: salmon;
    }
</style>

<body>
    <?php
    function tumpukanBola($tumpukan)
    {
        for ($a = 1; $a <= $tumpukan; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "<div class=bola>$a</div>";
            }
            echo "<br>";
        }
    }
    ?>

    <?= tumpukanBola(5); ?>
</body>

</html>