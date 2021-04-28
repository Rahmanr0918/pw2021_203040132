<?php
/* 
Rahman Ramadan
203040132
https://github.com/Rahmanr0918/pw2021_203040132.git
Pertemuan 4 - 1 Maret 2021
mempelajari Function
*/

?>

<?php
function salam($waktu = "datang", $nama = "admin")
{
    return "selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>

    <h1><?= salam(); ?></h1>

</body>

</html>