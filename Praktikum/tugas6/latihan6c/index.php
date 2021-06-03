<?php
// menghubungkan dengan file php lainya
require 'php/function.php';

// melakukan query
$makanan = query("SELECT * FROM makanan")
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css/tyle.css">
  <title>Hello, world!</title>
</head>

<body>

  <div class="container">
    <h1>Silahkan Pilih Menu Yang ada</h1>

    <?php foreach ($makanan as $item) : ?>
      <div class="Picture" style="display:inline-block;">
        <a href="php/detail.php?id=<?= $item['id'] ?>">
          <div class="uhuy"><img src="assets/img/<?= $item["Picture"] ?>" alt="">
        </a>
      </div>
  </div>

<?php endforeach; ?>
</div>

<div class="row justify-content-center mt-5">
  <a href="php/login.php">
    <button class="btn btn-primary">Masuk Ke Halaman Admin</button>
  </a>
</div>

</body>

</html>