<?php
require '../functions.php';
$lembaga = cari($_GET['keyword']);

?>
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