<?php
// mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php

if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

require 'function.php';
// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan paramater id yang
$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 4c</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/tyle.css">
</head>

<body>
  <div class="container">
    <table class="table table-striped table-dark">

      <thead>
        <tr>
          <th scope="col">Brand</th>
          <th scope="col">Status</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <th>
        <img src="../assets/img/<?= $makanan["Logo"] ?>" alt="">
      <td>
        <div class="s"><?= $makanan["Statuss"]; ?></div>
      </td>
      <td>
        <div class="c"><?= $makanan["Category"]; ?></div>
      </td>
      <td>
        <div class="p">Rp.<?= $makanan["Price"]; ?></div>
      </td>
      </th>

      <table><a href="../index.php" class="back">Kembali ke Menu</a></table>
  </div>



  </div>

</body>

</html>