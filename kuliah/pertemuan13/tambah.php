<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol telah ditekan
if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
   alert('Data Berhasil Ditambahkan');
   document.location.href = 'index.php';
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
</head>

<body>

  <h3>Tambahkan Data</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Gambar :
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="150px" style="display: block;" class="img-preview">
      </li>
      <li><label>
          Tipe Unit :
          <input type="text" name="Unit" required>
        </label>
      </li>
      <li>
        <label>
          Kepala Staf :
          <input type="text" name="KepalaStaf" required>
        </label>
      </li>
      <li>
        <label>
          Jumlah Personel :
          <input type="text" name="Personel">
        </label>
      </li>
      <li>
        <label>
          Moto :
          <input type="text" name="Moto">
        </label>
      </li>
      <li>
        <button type="submit" name="submit">Tambahkan Data</button>
      </li>
    </ul>
  </form>


  <script src="js/script.js"></script>

</body>

</html>