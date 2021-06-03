<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasar id
$lem = query("SELECT * FROM lembaga WHERE id=$id");


// cek apakah tombol telah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
   alert('Data Berhasil Diubah');
   document.location.href = 'index.php';
   </script>";
  } else {
    echo " <script>
    alert('Gagala Diubah');
    document.location.href = 'index.php';
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
</head>

<body>

  <h2>Ubah Data</h2>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $lem['id']; ?>">
    <ul>
      <li>
        <label>
          Gambar :
          <input type="text" name="Gambar" autofocus required value="<?= $lem['Gambar']; ?>">
        </label>
      </li>
      <li><label>
          Tipe Unit :
          <input type="text" name="Unit" required value="<?= $lem['Unit']; ?>">
        </label>
      </li>
      <li>
        <label>
          Kepala Staf :
          <input type="text" name="KepalaStaf" required value="<?= $lem['KepalaStaf']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jumlah Personel :
          <input type="text" name="Personel" value="<?= $lem['Personel']; ?>">
        </label>
      </li>
      <li>
        <label>
          Moto :
          <input type="text" name="Moto" value="<?= $lem['Moto']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>