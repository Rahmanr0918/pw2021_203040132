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

function upload()
{
  $nama_file = $_FILES['Gambar']['name'];
  $tipe_file = $_FILES['Gambar']['type'];
  $ukuran_file = $_FILES['Gambar']['size'];
  $error = $_FILES['Gambar']['error'];
  $tmp_file = $_FILES['Gambar']['tmp_name'];

  // ketika tidak memilih gambar
  if ($error == 4) {
    //   echo "<script>
    //   alert('pilih gambar terlebih dahulu');
    // </script>";

    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
    alert('Yang Anda Pilih Bukan Gambar');
  </script>";

    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/jpg') {
    echo "<script>
    alert('Yang Anda Pilih Bukan Gambar');
  </script>";

    return false;

    // cek ukuran file
    // maksimal 5Mb = 5000000
    if ($ukuran_file > 5000000) {
      echo "<script>
    alert('Ukuran Terlalu Besar');
  </script>";
      return false;
    }
  }

  // lolos pengecekan 
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  // $Gambar = htmlspecialchars($data['Gambar']);
  $TipeUnit = htmlspecialchars($data['Unit']);
  $KepalaStaf = htmlspecialchars($data['KepalaStaf']);
  $JumlahPersonel = htmlspecialchars($data['Personel']);
  $Moto = htmlspecialchars($data['Moto']);

  // upload gambar
  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }

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

  // menghapus gambar di folder img
  $lem = query("SELECT * FROM lembaga WHERE id=$id");
  if ($lem['Gambar'] != 'nophoto.jpg') {
    unlink('img/' . $lem['Gambar']);
  }

  mysqli_query($conn, "DELETE FROM lembaga WHERE id =$id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $TipeUnit = htmlspecialchars($data['Unit']);
  $KepalaStaf = htmlspecialchars($data['KepalaStaf']);
  $JumlahPersonel = htmlspecialchars($data['Personel']);
  $Moto = htmlspecialchars($data['Moto']);


  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }

  if ($Gambar == 'nophoto.jpg') {
    $Gambar = $gambar_lama;
  }


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
