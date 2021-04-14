<?php 
// melakukan koneksi ke Database
$conn = mysqli_connect("localhost", "root", "");

// memilih Database
mysqli_select_db($conn, "pw_tubes_203040132");

// Melakukan query database
$result = mysqli_query($conn, "SELECT * FROM makanan");


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
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class="containe">
    <table class="table table-striped table-dark">
    
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Logo</th>
      <th scope="col">Picture</th>
      <th scope="col">Status</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  
  <?php $i = 1; ?>
  <?php while($row = mysqli_fetch_assoc($result)) : ?>
  <tbody>
    <tr>
    <th scope="row"><?= $i; ?></th>
      <td width="180px"><img src="assets/img/<?= $row["Logo"]; ?>" title="Logo"></td>
      <td><img src="assets/img/<?=$row["Picture"];?>"></td>
      <td>
      <?php if($row["Statuss"]=="Available at Store") :?>
        <div class="ada"><?= $row["Statuss"]; ?></div>
      <?php elseif($row["Statuss"]=="Not Available") : ?>
        <div class="tidak"><?= $row["Statuss"]; ?></div>
        <?php endif; ?>
      </td>
        
      <td width="180px">
      <?php if($row["Category"]=="Donut") :?>
        <div class="donut"><?= $row["Category"]; ?></div>
      <?php elseif($row["Category"]=="Classic Bread") : ?>
        <div class="bread"><?= $row["Category"]; ?></div>
      <?php elseif ($row["Category"]=="Pudding") : ?>
        <div class="pudding"><?= $row["Category"]; ?></div>
      <?php endif; ?>
      </td>

      <td class="pri" width="100px">Rp.<?= $row["Price"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
    
    <table><div class="sumber"><a href="https://www.hollandbakery.co.id/" target="_blank">https://www.hollandbakery.co.id/</a></div></table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>