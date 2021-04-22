<?php 
require 'function.php';

if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "
            <script>
            alert('Registrasi Berhasil');
            document.location.href =  'login.php';
            </script>";
    } else {
        echo"<script>
        alert('Registrasi Gagal');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    
    <div class="container" style="width: 600px;">
<form action="" method="post">
  <div class="form-group row mt-5">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  
  
  <div class="form-group row offset-sm-2">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="register">REGISTER</button>
    </div>
  </div>
</form>

</div>


</body>
</html>