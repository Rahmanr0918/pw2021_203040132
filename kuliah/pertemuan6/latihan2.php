<?php 
// Rahman Ramadan
// 203040132
// https://github.com/Rahmanr0918/pw2021_203040132.git
// pertemuan 6 - 13 Maret
// Array assosiatif
?>
<?php 

// Array associcative
// Key-nya adalah string yang kita buat
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
    ],
    [
    "Tipe Unit" => "Angkatan Udara",
    "Kepala Staf" => "	Marsekal TNI Fadjar Prasetyo",
    "Jumlah Personel" => "37.850 224 pesawat",
    "Moto" => "Swa Bhuwana Paksa",
    "gambar"=>"tniAU.png"   
    ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<style>
body {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
}
li {
    margin-top: 15px;
    list-style: square;
}
</style>
<body>


<?php foreach($Tentara as $bagian) : ?>
<ul>

<img src="img/<?= $bagian["gambar"]; ?> ">
<li>Tipe Unit : <?= $bagian["Tipe Unit"]; ?></li>
<li>Kepala Staf : <?= $bagian["Kepala Staf"]; ?></li>
<li>Jumlah Personel : <?= $bagian["Jumlah Personel"]; ?></li>
<li>Moto : <?= $bagian["Moto"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>