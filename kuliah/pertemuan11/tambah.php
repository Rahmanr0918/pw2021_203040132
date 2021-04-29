<?php
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
    alert('Gagala Ditambahkan');
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
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Gambar :
          <input type="text" name="Gambar" autofocus required>
        </label>
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
</body>

</html>