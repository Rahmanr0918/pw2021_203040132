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
