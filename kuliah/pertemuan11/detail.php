<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$lem = query("SELECT * FROM lembaga WHERE id=$id;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Lembaga</title>
</head>

<body>
  <h3>Detail Lembaga</h3>
  <ul>
    <li><img src="img/<?= $lem['Gambar']; ?>" width="150px"></li>
    <li>Tipe Unit :<?= $lem['Unit']; ?></li>
    <li>Kepala Staf :<?= $lem['KepalaStaf']; ?></li>
    <li>Jumlah Personel :<?= $lem['Personel']; ?></li>
    <li>Moto :<?= $lem['Moto']; ?></li>
    <li><a href="ubah.php?id=<?= $lem['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $lem['id']; ?>" onclick="return confirm ('apakah anda yakin?')">Hapus</a></li>
    <li><a href="index.php">Kembali Ke Daftar Lembaga</a></li>
  </ul>

</body>

</html>