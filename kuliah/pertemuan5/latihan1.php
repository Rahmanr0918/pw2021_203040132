<?php 
/* 
Rahman Ramadan
203040132
https://github.com/Rahmanr0918/pw2021_203040132.git
Pertemuan 5 - 10 Maret 2021
mempelajari Array
*/
?>

<?php 

// array > Variabel yang memiliki banyak nilai
// Elemen array boleh memiliki tipe data yang beda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// membuat array,CARA LAMA
$hari = array("Senin", "Selasa", "Rabu");

// CARA BARU
$bulan = ["Januari", "Februari", "Maret"];

// Menampilkan array
// var_dump() ATAU print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo $hari[0];

// Menambahkan elemen baru
var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);



?>