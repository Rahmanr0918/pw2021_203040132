<?php


function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw2021_203040132');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  // ubah data ke dalam array
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $Gambar = htmlspecialchars($data['Gambar']);
  $TipeUnit = htmlspecialchars($data['Unit']);
  $KepalaStaf = htmlspecialchars($data['KepalaStaf']);
  $JumlahPersonel = htmlspecialchars($data['Personel']);
  $Moto = htmlspecialchars($data['Moto']);

  $query = "INSERT INTO lembaga
            VALUES 
            ('null', '$Gambar','$TipeUnit','$KepalaStaf','$JumlahPersonel','$Moto'); ";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM lembaga WHERE id =$id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $Gambar = htmlspecialchars($data['Gambar']);
  $TipeUnit = htmlspecialchars($data['Unit']);
  $KepalaStaf = htmlspecialchars($data['Kepala Staf']);
  $JumlahPersonel = htmlspecialchars($data['Personel']);
  $Moto = htmlspecialchars($data['Moto']);

  $query = "UPDATE lembaga 
            SET
            Gambar = '$Gambar',
            Unit = '$TipeUnit',
            KepalaStaf = '$KepalaStaf',
            Personel = '$JumlahPersonel',
            Moto = '$Moto'
              WHERE id =$id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM lembaga
            WHERE Unit LIKE '%$keyword%' OR 
            KepalaStaf Like '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function login($data)
{
  $conn = Koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);


  // cek dulu username
  if ($user = query("SELECT  * FROM user WHERE username = '$username' ")) {

    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;
      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'username / password salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);


  // Jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
      alert('username / password tidak boleh kosong');
      document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
      alert('username sudah terdaftar');
      document.location.href = 'registrasi.php';
    </script>";
    return false;
  }


  // jika konfirmasi tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
      alert('konfirmasi password tidak sesuai!');
      document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // jika password kurang 5 digit
  if (strlen($password1 < 5)) {
    echo "<script>
      alert('password terlalu pendek');
      document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // jika usernama dan password sesuia
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  // insert ke tabel user
  $query = "INSERT INTO USER VALUES 
            (null, '$username','$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return  mysqli_affected_rows($conn);
}
