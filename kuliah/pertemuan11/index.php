<?php

require 'functions.php';
// tampung ke variabel lembaga
$lembaga = query("SELECT * FROM lembaga");


// Ketika tombol cari diklik
if (isset($_POST['Cari'])) {
  $lembaga = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertemuan Ke 11</title>
</head>

<body>
  <h3>Unsur-unsur dan Komponen Pertahanan Negara</h3>

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="Masukan Pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="Cari">Cari</button>
  </form>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Tipe Unit</th>
      <th>Aksi</th>
    </tr>
    <?php if (empty($lembaga)) : ?>
      <tr>
        <td colspan="4">
          <p>Tidak Ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i = 1;
    foreach ($lembaga as $lem) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $lem['Gambar'] ?> " width="120px"></td>
        <td><?= $lem['Unit'] ?></td>
        <td><a href="detail.php?id=<?= $lem['id']; ?>">Lihat Detail</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>