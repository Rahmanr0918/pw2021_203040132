<?php
$arrays = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3b</title>
</head>

<body>
    <h2>Daftar Pemain Bola Terkenal</h2>
    <ol>
        <?php foreach ($arrays as $array) : ?>
            <li><?= $array; ?></li>
        <?php endforeach;  ?>
    </ol>


    <?php
    array_push($arrays, "Luca Modric", "Sadio Mane");
    sort($arrays)
    ?>


    <h2>Daftar Pemain Bola Terkenal Baru</h2>
    <ol>
        <?php foreach ($arrays as $array) : ?>

            <li><?= $array; ?></li>
        <?php endforeach;  ?>
    </ol>

</body>

</html>