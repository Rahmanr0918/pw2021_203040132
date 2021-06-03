<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// Menghubungkan dengan file php lainnya
require 'function.php';

$id = $_GET['id'];
$item = query("SELECT * FROM makanan WHERE id =$id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
                alert('Data Gagal diubah');
                document.location.href = 'admin.php';
            </script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/admin.css">

  <title>Hello, world!</title>
</head>

<body>


  <div class="uhuy">
    <div class="alert alert-secondary" role="alert">
      <h2>From Ubah Data</h2>
    </div>
    <form action="" method="post">
      <div class="row contentf">
        <div class="col-4">
          <label for="Logo">Merek</label>
          <label for="Picture">Gambar Produk</label>
          <label for="Status">Status</label>
          <label for="Category">Kategori</label>
          <label for="Price">Harga</label>
        </div>
        <input type="hidden" name="id" id="id" value="<?= $item['id'] ?>">
        <div class="col-8">
          <input type="text" class="form-control" placeholder="logo" name="Logo" value="<?= $item['Logo'] ?>" id="Logo">
          <input type="text" class="form-control" placeholder="produk" name="Picture" value="<?= $item['Picture'] ?>">
          <select id="inputState" class="form-control" name="Statuss" value="<?= $item['Statuss'] ?>" id="Status">
            <option selected>Available at Store</option>
            <option>Not Available</option>
          </select>
          <select id="inputState" class="form-control" name="Category" value="<?= $item['Category'] ?>" id="Category">
            <option selected>Donut</option>
            <option>Classic Bread</option>
            <option>Pudding</option>
          </select>
          <input type="text" class="form-control" placeholder="20000" name="Price" required value="<?= $item['Price'] ?>" id="Price">

          <div class="buton">
            <button type="submit" class="btn btn-outline-success" name="ubah">Simpan Perubahan</button>
            <button type="submit" class="btn btn-outline-dark"><a href="../index.php">Kembali</a></button>
          </div>

        </div>
    </form>
  </div>












  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>