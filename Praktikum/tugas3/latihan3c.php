<?php 
$pemains = [
    "Cristiano Ronaldo"=>"Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric"=>"Real Madrid",
    "Mohammad Salah"=>"Liverpool",
    "Neymar Jr"=>"Paris Saint German",
    "Sadio Mane"=>"Liverpool",
    "Zlatan Ibrahimovic"=>"Ac Milan"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
</head>
<body>

    <h3>Daftar Pemain Bola Terkenal dan Clubnya</h3>
    <table >
    <?php foreach($pemains as $pemain=>$club) : ?>
        <tr>
        <td width="150px"><b><?= "$pemain" ?></b></td>  
        <td><?= "<b>:</b> $club" ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>