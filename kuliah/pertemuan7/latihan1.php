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
// Variabel Scope / lingkup variabel
// variabel superglobal (milik php)

// $_GET

$Tentara = [
    [
    "Tipe Unit" => "Angkatan Darat",
    "Kepala Staf" => "	Jenderal TNI Andika Perkasa",
    "Jumlah Personel" => "483.000 (2016)",
    "Moto" => "Kartika Eka Paksi",
    "gambar" =>"tniAD.png"
    ],
    [
    "Tipe Unit" => "Angkatan Laut",
    "Kepala Staf" => "	Laksamana TNI Yudo Margono",
    "Jumlah Personel" => "74.000 (2011)",
    "Moto" => "Jalesveva Jayamahe",
    "gambar"=>"tniAL.png"   
    ]];
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
        <?php foreach($Tentara as $a) : ?>
            <a href="latihan2.php?Moto=<?= $a["Moto"];?>&TipeUnit=<?= $a["Tipe Unit"];?>&JumlahPersonel=<?= $a["Jumlah Personel"]; ?>&gambar=<?= $a["gambar"]?>"><li><?= $a["Moto"]; ?></li></a>
        <?php endforeach; ?>
    </ul>
</body>
</html>

