<?php
session_start();
require 'function.php';

// melakukan pengecekan user sudah melakukan login, jika sudah direct ke admin
if (isset($_POST['username'])) {
  header("Location: admin.php");
  exit;
}

// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

  // mencocokan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
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
      <?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic;">Username atau password salah</p>
      <?php endif; ?>
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

      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="cekbok" id="cekbok">
            <label class="form-check-label" for="cekbok">
              Remember Me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group row offset-sm-2">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
      </div>

      <div class="registrasi offset-sm-2">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
      </div>
    </form>
  </div>


</body>

</html>