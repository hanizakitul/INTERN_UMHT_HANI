<?php 
require 'function.php';
query("SELECT * FROM siswa");


// ambil data dari tabel mahasiswaq / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM siswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan
// mysqli_fetch_array()
// mysqli_fetch_object()

// while( $siswi = mysqli_fetch_assoc($result) ) {
//     var_dump($siswi["nama"]);
// }



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <td>No.</td>
    <td>Aksi</td>
    <td>Gambar</td>
    <td>NRP</td>
    <td>Nama</td>
    <td>email</td>
    <td>Jurusan</td>
</tr>
<?php while( $row = mysqli_fetch_assoc($result) ) :?>

<tr>
    <td>1</td>
    <td>
        <a href="">hani</a> |
        <a href="">zakiatul</a>
    </td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50"> </td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>