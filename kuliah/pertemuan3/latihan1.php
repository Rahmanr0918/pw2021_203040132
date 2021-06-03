<?php
/* 
Rahman Ramadan
203040132
https://github.com/Rahmanr0918/pw2021_203040132.git
Pertemuan 3 - 18 Februari 2021
mempelajari Struktur Kendali
*/

?>
<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array 


// for ($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

// $i = 0;
// while( $i < 5) {
//     echo "Hello World! ";
// $i++;
// }

// $i = 0;
// do {
//     echo "hello world ";
//     $i++;
// } while ($i < 5);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
    <style>
        .warna {
            background-color: silver;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($a = 1; $a <= 5; $a++) : ?>

            <?php if ($a % 2 == 1) : ?>
                <tr class="warna">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($b = 1; $b <= 4; $b++) : ?>
                    <td><?= "$a, $b"; ?> </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>

</html>