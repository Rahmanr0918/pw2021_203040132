<!-- 
    Rahman Ramadan
    203040132
    Praktikum 13.00
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
</head>
<style>
    .buled {
        display: inline-block;
        background-color: salmon;
        height: 40px;
        width: 40px;
        line-height: 40px;
        text-align: center;
        border: 2px solid black;
        border-radius: 30px;
        margin: 3px;

    }
</style>

<body>

    <?php for ($a = 1; $a <= 3; $a++) : ?>
        <?php for ($s = 1; $s <= $a; $s++) : ?>
            <div class="buled">
                <?= $a ?>
            </div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>

</html>