<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "form mahasiswa");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_array($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = $_POST["nama"];
    $pengaduan = $_POST["pengaduan"];
    $gambar = $_POST["gambar"]; 

    $query = "INSERT INTO formmahasiswa
    VALUES
    ('', '$nama', '$pengaduan', '$gambar')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM frommahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>