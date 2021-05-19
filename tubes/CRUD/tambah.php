<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../login.php");
  exit;
}

require '../functions.php';

// cek apakah tombol telah ditekan
if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
   alert('Data Berhasil Ditambahkan');
   document.location.href = '../index.php';
   </script>";
  } else {
    echo " <script>
    alert('Gagal Ditambahkan');
    </script> ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>

  <!-- link css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/tambahubah.css">

</head>

<body>

  <div class="container">
    <div class="alert alert-dark" role="alert" style="width: 1000px;">
      <h3>Tambahkan Data</h3>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-1">
          <p>Gambar</p>
          <p>Nama</p>
          <p>Kategori</p>
          <p>Status</p>
          <p>Harga</p>
        </div>
        <div class="col-5">
          <input type="file" name="Picture" class="Gambar" onchange="previewImage()">
          <input type="text" name="Nama" required autocomplete="off">
          <select class="form-select" aria-label="Default select example" name="Category" required>
            <option selected>Donut</option>
            <option>Classic Bread</option>
            <option>Pudding</option>
          </select>
          <input type="text" name="Statuss" autocomplete="off">
          <input type="text" name="Price" autocomplete="off">
          <button type="submit" class="btn btn-success" name="submit">Tambahkan Data</button>
          <button type="submit" class="btn btn-light"><a href="../index.php">Kembali</a></button>
        </div>
        <div class="col-6">
          <img src="../img/nophoto.jpg" style="display: block;" class="img-preview">
        </div>

    </form>
  </div>

  <script src="../js/script.js">
  </script>

</body>

</html>