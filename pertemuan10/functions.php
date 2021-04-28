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
  $KepalaStaf = htmlspecialchars($data['Kepala_Staf']);
  $JumlahPersonel = htmlspecialchars($data['Personel']);
  $Moto = htmlspecialchars($data['Moto']);

  $query = "INSERT INTO lembaga
            VALUES 
            ('null', '$Gambar','$TipeUnit','$KepalaStaf','$JumlahPersonel','$Moto'); ";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
