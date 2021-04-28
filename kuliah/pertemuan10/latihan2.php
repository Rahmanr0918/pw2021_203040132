<?php

require 'functions.php';
// tampung ke variabel lembaga
$lembaga = query("SELECT * FROM lembaga");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertemuan Ke 10</title>
</head>

<body>
  <h3>Unsur-unsur dan Komponen Pertahanan Negara</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Tipe Unit</th>
      <th>Kepala Staf</th>
      <th>Jumlah Personel</th>
      <th>Moto</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($lembaga as $lem) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $lem['Gambar'] ?> "></td>
        <td><?= $lem['Unit'] ?></td>
        <td><?= $lem['Kepala Staf'] ?></td>
        <td><?= $lem['Personel'] ?></td>
        <td><?= $lem['Moto'] ?></td>
        <td><a href="#">ubah</a> | <a href="#">Hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>