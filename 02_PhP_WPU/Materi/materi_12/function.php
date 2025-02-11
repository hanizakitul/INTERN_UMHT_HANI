<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");


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

    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"]; 

    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nrp', '$nama', '$email', 'jurusan', '$gambar')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>