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
/*  Date
    untuk menampilkan tanggal dengan format tertentu  */

//  echo date("l, d-M-Y");

// ----------==========================================-----

/*  Time 
    UNIX Timestamp / Epoch time 
    artinya detik yang sudah berlalu sejak 1 januari 1970 */

// echo time();
// echo date("D M Y", time() - 60 * 60 * 24 * 100);

// -------=========================================--------
/*  mktime
    mengatur detik sendiri
    mktime(0,0,0,0,0,0)
    jam, menit, detik, bulan, tanggal, tahun */

// echo date("l", mktime(0, 0, 0, 11, 18, 2002));

// ================================================== 

/* strtotime */

echo date("D", strtotime("25 aug 2020"));
