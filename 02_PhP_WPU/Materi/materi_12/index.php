<?php 
require 'function.php';
$mahasiswa = query("SELECT * FROM SISWA");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br></br>

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

<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">hani</a> |
        <a href="">zakiatul</a>
    </td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50"> ></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>