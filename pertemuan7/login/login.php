<?php
/* 
Rahman Ramadan
203040132
https://github.com/Rahmanr0918/pw2021_203040132.git
Pertemuan 7 - 19 Maret 2021
mempelajari Git & Post
*/
?>

<?php 
// cek apakah submit sudah ditekan
if( isset($_POST["submit"])) {
// cek username & password
if( $_POST["username"] == "admin" && $_POST["password"] == "112233") {
// Jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;
} else {
// Jika salah, tampilkan pesan kesalahan
    $error = true;
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
.container {
    width: 100%;
    text-align: center;
}

ul li {
    list-style: none;
    padding: 8px;
}

li input {
    height: 20px;
}
li button {
    width: 240px;
}
</style>
<body>
<div class="container">
    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
    <p style="color: red; font-style:italic"> Username / password salah</p>
<?php endif; ?>

    <ul>
    <form action="" method="post">
    <li>
        <label for="username">Username :</label>
        <input type="text"  name="username" id="username">
    </li>
    <li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
    <button type="submit" name="submit">Login</button>
    </li>
    
    
    </form>
    </ul>
    </div>
</body>
</html>