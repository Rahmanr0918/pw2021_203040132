<?php 
// Rahman Ramadan
// 203040132
// https://github.com/Rahmanr0918/pw2021_203040132.git
// pertemuan 6 - 13 Maret
// Array assosiatif
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
</head>
<style>
.kotak {
    width: 50px;
    height: 50px;
    background-color: #BADA55;
    text-align: center;
    line-height: 50px;
    margin: 3px;
    float: left;
    transition: 0.5s;
}
.kotak:hover {
    transform: rotate(360deg);
    border-radius: 50%;
}

.clear {
    clear: both;
}
</style>
<body>
    
<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9]] ;
?>

<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>