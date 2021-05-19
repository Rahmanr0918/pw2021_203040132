<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../login.php");
  exit;
}

require '../functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasar id
$lem = query("SELECT * FROM makanan WHERE id=$id");


// cek apakah tombol telah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
   alert('Data Berhasil Diubah');
   document.location.href = '../index.php';
   </script>";
  } else {
    echo " <script>
    alert('Gagala Diubah');
    document.location.href = '../index.php';
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
  <title>Ubah Data</title>

  <!-- link css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/tambahubah.css">
</head>

<body>

  <div class="container">
    <div class="alert alert-dark" role="alert" style="width: 1000px;">
      <h3>Ubah Data</h3>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $lem['id']; ?>">
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
          <input type="text" name="Nama" required value="<?= $lem['Nama']; ?>">
          <input type="text" name="Category" value="<?= $lem['Category']; ?>">
          <input type="text" name="Statuss" value="<?= $lem['Statuss']; ?>">
          <input type="text" name="Price" value="<?= $lem['Price']; ?>">
          <button type="submit" name="ubah">Selesai</button>
          <a href="detail.php?id=<?= $lem['id']; ?>">Kembali</a>
        </div>
        <div class="col-6">
          <input type="hidden" name="gambar_lama" value="<?= $lem['Picture']; ?>">
          <img src="../img/<?= $lem['Picture']; ?>" style="display: block;" class="img-preview">
        </div>

    </form>
  </div>

  <script src="../js/script.js"></script>
</body>

</html>