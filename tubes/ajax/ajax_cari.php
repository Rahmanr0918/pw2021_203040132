<?php
require '../functions.php';
$makanan = cari($_GET['keyword']);

?>
<div class="container">
  <h3>Special Bulan Suci Ramadan</h3>

  <br>
  <div class="row">
    <div class="col-2">
      <div class="box">
        <h6>Category</h6>
        <ul>
          <li><a href="#">Donut</a></li>
          <li><a href="#">Classic Bread</a></li>
          <li><a href="#">Pudding</a></li>
        </ul>
      </div>
    </div>

    <div class="col-10">

      <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="4">
            <h4>Tidak Ditemukan</h4>
          </td>
        </tr>
      <?php endif; ?>
      <?php $i = 1;
      foreach ($makanan as $lem) : ?>

        <div class="card">
          <img src="img/<?= $lem['Picture']; ?>" class="card-img-top" height="200px">
          <div class="card-body">
            <h6 class="card-title"><?= $lem['Nama']; ?></h6>
            <p class="card-text">Rp <?= $lem['Price']; ?></p>
            <a href="CRUD/detail.php?id=<?= $lem['id']; ?>" class="btn btn-primary">Detail</a>
            <small class="user-select-none"><?= $lem['Statuss']; ?></small>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>