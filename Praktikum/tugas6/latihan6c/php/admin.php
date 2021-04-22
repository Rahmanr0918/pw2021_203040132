<?php 
// Menghubungkan dengan file php lainnya
require 'function.php';


if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE 
                  Logo LIKE '%$keyword%' OR Picture LIKE '%$keyword%'
                  OR Statuss LIKE '%$keyword%' OR Category LIKE '%$keyword%'
                  OR Price LIKE '%$keyword%'
                  ");
} else {
  // melakukan query
  $makanan = query("SELECT * FROM makanan");
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
  <div class="add" style="margin:10px 119px; display: flex; justify-content:space-between; padding:20px;">
    <a href="tambah.php">
    <button type="button" class="btn btn-outline-secondary">Tambahkan Data</button>
    </a>
    <form action="" method="get" style="width: 500px; display:flex;">
      <input class="form-control" type="text" name="keyword" placeholder="Cari kategori - Donut, Classic Bread, Pudding.." autofocus style="max-width: 400px;">
      <button type="submit" class="btn btn-info" name="cari" style="min-width: 100px; margin-left:24px;">Cari</button>
    </form>

    <a href="logout.php">
    <button type="submit" class="btn btn-warning" >Logout</button></a>
  </div>

  <?php if(empty($makanan)) : ?>
    <tr>
      <td colspan="7"><h1>Data tidak ditemukan</h1></td>
    </tr>
  <?php else : ?>

  <div class="container">

    <table class="table table-striped table-dark">
    
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Opsi</th>
      <th scope="col">Logo</th>
      <th scope="col">Picture</th>
      <th scope="col">Status</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  
  <?php $i = 1; ?>
  <?php foreach($makanan as $item) : ?>
  <tbody>
    <tr>
    <th scope="row"><?= $i; ?></th>

    <td>
        <a href="ubah.php?id=<?= $item['id']?>"><button type="button" class="btn btn-success">Ubah</button></a>
        <a href="hapus.php?id=<?= $item['id']?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?')"><button type="button" class="btn btn-danger">Hapus</button></a>
    </td>

      <td width="180px"><img src="../assets/img/<?= $item["Logo"]; ?>" title="Logo"></td>
    
      <td><img src="../assets/img/<?= $item["Picture"];?>"></td>
      <td>
    
      <?php if($item["Statuss"]=="Available at Store") :?>
        <div class="ada"><?= $item["Statuss"]; ?></div>
      <?php elseif($item["Statuss"]=="Not Available") : ?>
        <div class="tidak"><?= $item["Statuss"]; ?></div>
        <?php endif; ?>
      </td>
        
      <td width="180px">
      <?php if($item["Category"]=="Donut") :?>
        <div class="donut"><?= $item["Category"]; ?></div>
      <?php elseif($item["Category"]=="Classic Bread") : ?>
        <div class="bread"><?= $item["Category"]; ?></div>
      <?php elseif ($item["Category"]=="Pudding") : ?>
        <div class="pudding"><?= $item["Category"]; ?></div>
      <?php endif; ?>
      </td>

      <td class="pri" width="100px">Rp.<?= $item["Price"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    <?php endif; ?>


    <table><div class="sumber"><a href="https://www.hollandbakery.co.id/" target="_blank">https://www.hollandbakery.co.id/</a></div></table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>