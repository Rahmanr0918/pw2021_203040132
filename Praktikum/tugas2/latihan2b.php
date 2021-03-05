<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>
</head>
<style>
    .style {
        border: 2px solid black;
        padding: 10px;
        font-size: 20px;

    }
</style>

<body>

    <?php
    $jawabanIsset = " Isset = digunakan untuk mengecek sebuah variabel apakah sudah pernah dibuat atau belum. Ketika variabel belum pernah dibuat maka hasilnya false.<br><br>";
    $jawabanEmpty = " Empty = digunakan untuk mengecek apakah variabel ada isinya atau tidak. ";

    function soal($style)
    {
        global $jawabanIsset;
        global $jawabanEmpty;
        return "<div class=$style>$jawabanIsset  $jawabanEmpty</div>";
    }
    echo soal("style");
    ?>

</body>

</html>