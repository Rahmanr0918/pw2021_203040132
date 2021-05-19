<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
// tampung ke variabel makanan
$makanan = query("SELECT * FROM makanan");


// Ketika tombol cari diklik
if (isset($_POST['Cari'])) {
  $makanan = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Besar | Rahman Ramadan</title>

  <!-- link css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="css/index.css">

  <!-- link fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>


  <nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand"></a>

      <div class="dropdown me-auto">
        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user-circle" title="akun"></i>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="CRUD/tambah.php"><i class="fas fa-plus-circle"></i> Tambah Data</a></li>
          <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt" style="transform:rotate(180deg);"></i> Keluar</a></li>
        </ul>
      </div>

      <form class="d-flex" action="" method="POST" style="width: 360px;">
        <input class="form-control me-2 keyword" type="text" aria-label="Search" name="keyword" placeholder="Masukan kategori pencarian.." autocomplete="off">
        <button class="btn btn-outline-success" type="submit" name="Cari">Search</button>
      </form>

    </div>
  </nav>

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
              <p>Tidak Ditemukan</p>
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

  <form action="" method="POST" hidden>
    <input type="text" name="keyword" size="30" placeholder="Masukan Pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="Cari" class="tombol-cari">Cari</button>
  </form>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



</body>

</html>