<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../login.php");
  exit;
}

require '../functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$lem = query("SELECT * FROM makanan WHERE id=$id;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail makanan</title>

  <!-- link css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/detail.css">

  <!-- link fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

  <div class="container">
    <div class="alert alert-dark" role="alert" style="width: 800px;">
      <h3>Detail Produk</h3>
    </div>

    <div class="card mb-3" style="max-width: 540px; margin: 60px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../img/<?= $lem['Picture']; ?>" title="<?= $lem['Nama']; ?>" width="100%">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $lem['Nama']; ?></h5>
            <p class="card-text">Kategori : <?= $lem['Category']; ?></p>
            <p class="card-text">Status : <?= $lem['Statuss']; ?></p>
            <p class="card-text">Harga : <?= $lem['Price']; ?></p>
            <div class="link">
              <a href="ubah.php?id=<?= $lem['id']; ?>"><i class="fas fa-edit"></i><small>edit</small></a>
              <a href="hapus.php?id=<?= $lem['id']; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i><small>hapus</small></a>
              <a href="../index.php" class="back">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>