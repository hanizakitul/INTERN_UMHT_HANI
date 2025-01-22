<?php
// array
// membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "teks", true];
// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
// menampilkan 1 elemen pada array
echo $arr[0];
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Latihan array</title>
        <style>
            .kotak {
                width: 30px;
                height: 30px;
                background-color: #BADA55;
                text-align: center;
                line-height: 30px;
                margin: 3px;
                float: left;
                transition: 1s;
            }
            .kotak:hover {
                transform: rotate(360deg);
                border-radius: 50%;
            }
            .clear {
                clear: both;
            }
        </style>
        </head>
        <body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>



</body>
</html


array asociative
definisinya sama seperti array numerik, kecuali
key-nya adalah string yang kita buat sendiri -->

<?php
$mahasiswa = [
    [
        "nama" => "Raisul",
        "nisn" => "0083463554",
        "email" => "raisuldayu@gmail.com",
        "jurusan" => "pplg",
    ],
    [
        "nama" => "hanoy",
        "nisn" => "0078716380",
        "email" => "hanizakiatulaminah@gmail.com",
        "jurusan" => "pplg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
     <h1>daftar mahasiswa</h1>
     <?php foreach( $mahasiswa as $mhs ) :?>
     <ul>
        
    <li>nama :<?= $mhs["nama"]; ?></li>
    <li>Nisn :<?= $mhs["nisn"]; ?></li>
    <li>Jurusan :<?= $mhs["email"]; ?></li>
    <li>email :<?= $mhs["jurusan"]; ?></li>
     </ul>
     <?php endforeach; ?>

</body>
</html>