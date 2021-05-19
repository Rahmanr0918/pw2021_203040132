<?php


function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_tubes_203040132');
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
  $nama_file = $_FILES['Picture']['name'];
  $tipe_file = $_FILES['Picture']['type'];
  $ukuran_file = $_FILES['Picture']['size'];
  $error = $_FILES['Picture']['error'];
  $tmp_file = $_FILES['Picture']['tmp_name'];

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
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  // $Gambar = htmlspecialchars($data['Gambar']);
  $Nama = htmlspecialchars($data['Nama']);
  $Category = htmlspecialchars($data['Category']);
  $Statuss = htmlspecialchars($data['Statuss']);
  $Price = htmlspecialchars($data['Price']);

  // upload gambar
  $Picture = upload();
  if (!$Picture) {
    return false;
  }

  $query = "INSERT INTO makanan
            VALUES 
            ('null','','$Picture','$Statuss','$Category','$Price', '$Nama'); ";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $lem = query("SELECT * FROM makanan WHERE id=$id");
  if ($lem['Picture'] != 'nophoto.jpg') {
    unlink('../img/' . $lem['Picture']);
  }

  mysqli_query($conn, "DELETE FROM makanan WHERE id =$id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $Nama = htmlspecialchars($data['Nama']);
  $Category = htmlspecialchars($data['Category']);
  $Statuss = htmlspecialchars($data['Statuss']);
  $Price = htmlspecialchars($data['Price']);


  $Picture = upload();
  if (!$Picture) {
    return false;
  }

  if ($Picture == 'nophoto.jpg') {
    $Picture = $gambar_lama;
  }


  $query = "UPDATE makanan 
            SET
            Picture = '$Picture',
            Nama = '$Nama',
            Category = '$Category',
            Statuss = '$Statuss',
            Price = '$Price'
              WHERE id =$id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM makanan
            WHERE Category LIKE '%$keyword%' OR Nama LIKE '%$keyword%'";
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
      alert('username / password tidak boleh kosong!! Coba Ulangi');
      document.location.href = 'login.php';
    </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
      alert('username sudah terdaftar!! Coba Ulangi');
      document.location.href = 'login.php';
    </script>";
    return false;
  }


  // jika konfirmasi tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
      alert('konfirmasi password tidak sesuai!! Coba Ulangi');
      document.location.href = 'login.php';
    </script>";
    return false;
  }

  // jika password kurang 5 digit
  if (strlen($password1 < 5)) {
    echo "<script>
      alert('password terlalu pendek!! Coba Ulangi');
      document.location.href = 'login.php';
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
