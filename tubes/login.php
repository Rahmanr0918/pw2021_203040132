<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

// registrasi
if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
      alert('username baru berhasil ditambahkan. Silahkan Login!');
      document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
      alert('username gagal ditambahkan!');
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- link cs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">

</head>

<body>


  <section>
    <div class="container">
      <div class="user signInBx">
        <div class="imgBx"><img src="assets/img/lock.png" width="400px" height="500px"></div>
        <div class="formBx">
          <form action="" method="POST">
            <h2>Sign In</h2>
            <input type="text" class="form-control" name="username" required autocomplete="off" placeholder="username = aman">
            <input type="password" class="form-control" name="password" placeholder="password = 112233">


            <!-- <input type="text" name="username" placeholder="Username = aman" required autocomplete="off">
            <input type="password" name="password" placeholder="Password = 112233"> -->

            <?php if (isset($login['error'])) : ?>
              <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary" name="login">Login</button>

            <p class="signup">Tidak memiliki akun? <a href="#" onclick="toggleForm();">Daftar</a></p>
          </form>
        </div>
      </div>

      <!-- Registrasi / SignUp -->
      <div class="user signupBx">
        <div class="formBx">
          <form action="" method="POST">
            <h2>Create an account</h2>
            <input type="text" name="username" placeholder="Username" autocomplete="off" required>
            <input type="password" name="password1" placeholder="Password">
            <input type="password" name="password2" placeholder="Verify password">

            <button type="submit" class="btn btn-primary" name="registrasi">Register</button>
            <p class="signup">Sudah memiliki akun? <a href="#" onclick="toggleForm();">Masuk</a></p>
          </form>
        </div>
        <div class="imgBx"><img src="assets/img/regis.jpg" width="400px" height="500px"></div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    function toggleForm() {
      var container = document.querySelector('.container');
      container.classList.toggle('active')
    }
  </script>


</body>

</html>