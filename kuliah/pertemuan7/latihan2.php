<?php
/* 
Rahman Ramadan
203040132
https://github.com/Rahmanr0918/pw2021_203040132.git
Pertemuan 7 - 19 Maret 2021
mempelajari Git & Post
*/
?>
<?php
// mengecek apakah tidak ada di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["Moto"]) ||
    !isset($_GET["Tipeunit"])
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li><img src="img/<?= $_GET['gambar'] ?>"></li>
        <li><?= $_GET["Moto"]; ?></li>
        <li><?= $_GET["TipeUnit"]; ?></li>
        <li><?= $_GET["JumlahPersonel"]; ?></li>
        <li>apa</li>
        <li>apaatuh</li>
    </ul>

    <a href="latihan1.php">Kembali ke latihan1</a>

</body>

</html>