<?php 
$makanan = [
    [
    "Logo"=>"logo.png",
    "Picture"=>"aa.png",
    "Status"=>"Available at Store",
    "p"=>"Cheese John",
    "Category"=>"Donut",
    "Price"=>"Rp 10.000"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"ab.png",
    "Status"=>"Available at Store",
    "p"=>"Chocolate John",
    "Category"=>"Donut",
    "Price"=>"Rp 8.500"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"ac.png",
    "p"=>"Banana Chocolate",
    "Status"=>"Available at Store",
    "Category"=>"Donut",
    "Price"=>"Rp 9.000"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"ad.png",
    "p"=>"Donat Ayam Special",
    "Status"=>"Available at Store",
    "Category"=>"Donut",
    "Price"=>"Rp 10.000"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"ba.png",
    "p"=>"Roti Bakso Sapi",
    "Status"=>"Not Available",
    "Category"=>"Classic Bread",
    "Price"=>"Rp 11.000"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"bb.png",
    "p"=>"Roti Coklat",
    "Status"=>"Available at Store",
    "Category"=>"Classic Bread",
    "Price"=>"Rp 8.500"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"bc.png",
    "p"=>"Roti Coklat Susu",
    "Status"=>"Available at Store",
    "Category"=>"Classic Bread",
    "Price"=>"Rp 9.000"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"bd.png",
    "p"=>"Roti Kismis",
    "Status"=>"Available at Store",
    "Category"=>"Classic Bread",
    "Price"=>"Rp 8.500"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"ca.png",
    "Status"=>"Not Available",
    "p"=>"Kelapa Pandan <br>Pudding Log",
    "Category"=>"Pudding",
    "Price"=>"Rp 22.000"
    ],
    [
    "Logo"=>"logo.png",
    "Picture"=>"cb.png",
    "p"=>"Pudding Orange",
    "Status"=>"Available at Store",
    "Category"=>"Pudding",
    "Price"=>"Rp 110.000"
    ]
    
  ];

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
    <link rel="stylesheet" href="assets/style.css">

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
  <?php foreach($makanan as $item) : ?>
  <tbody>
    <tr>
    <th scope="row"><?= $i; ?></th>
      <td width="180px"><img src="assets/img/<?= $item["Logo"]; ?>" title="Logo"></td>
      <td><img src="assets/img/<?=$item["Picture"];?>"><br><p class="p"><?= $item["p"]; ?></p></td>
      <td>
      <?php if($item["Status"]=="Available at Store") :?>
        <div class="ada"><?= $item["Status"]; ?></div>
      <?php elseif($item["Status"]=="Not Available") : ?>
        <div class="tidak"><?= $item["Status"]; ?></div>
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

      <td class="pri" width="100px"><?= $item["Price"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    
    <table><div class="sumber"><a href="https://www.hollandbakery.co.id/" target="_blank">https://www.hollandbakery.co.id/</a></div></table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>