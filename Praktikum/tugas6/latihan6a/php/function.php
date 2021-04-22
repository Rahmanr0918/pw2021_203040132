<?php 

// Fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040132");

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function klik($data) {
    $conn = koneksi();

    $Logo = htmlspecialchars($data['Logo']);
    $Picture = htmlspecialchars($data['Picture']);
    $Status = htmlspecialchars($data['Statuss']);
    $Category = htmlspecialchars($data['Category']);
    $Price = htmlspecialchars($data['Price']);

    $query = "INSERT INTO makanan
                VALUES
                ('','$Logo','$Picture','$Status','$Category','$Price')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah

function ubah($data) {
    $conn = koneksi();
    $id = $data['id'];
    $id = htmlspecialchars($data['id']);
    $Logo = htmlspecialchars($data['Logo']);
    $Picture = htmlspecialchars($data['Picture']);
    $Status = htmlspecialchars($data['Statuss']);
    $Category = htmlspecialchars($data['Category']);
    $Price = htmlspecialchars($data['Price']);

    $query = "UPDATE makanan
                SET
                Logo = '$Logo',
                Picture = '$Picture',
                Statuss = '$Status',
                Category = '$Category',
                Price = '$Price'
                WHERE id = $id ";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



?>


