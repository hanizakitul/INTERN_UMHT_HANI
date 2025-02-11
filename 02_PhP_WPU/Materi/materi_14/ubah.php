<?php
require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
var_dump($siswi[0]["nama"]);

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    

    // cek apakah data berhasil di tambahkan atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo " 
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }


    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah data mahasiswa</title>
    </head>
    <body>
        <h1>Ubah data mahasiswa</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $siswi["id"]; ?>">
            <ul>
                <li>
                    <label for="nrp">NRP : </label>
                    <input type="text" name="nrp" id="nrp" required value="<?= $siswi["nrp"]; ?>">

                </li>
                <li> 
                  <label for="nama">Nama : </label>
                  <input type="text" name="nama" id="nama" value="<?= $siswi["nama"]; ?>">
                </li>
                <li>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email" value="<?= $siswi["email"]; ?>">
                </li>
                <li>
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" name="jurusan" id="jurusan" value="<?= $siswi["jurusan"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar : </label>
                    <input type="text" name="gambar" id="gambar" value="<?= $siswi["gambar"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data!</button>
                </li>
            </ul>

    </body>
</html>