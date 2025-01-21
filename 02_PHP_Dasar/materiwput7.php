<?php 
// array
// variabel yang dapat memiliki banyak nilai

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print__r()
//*var_dump($hari);
//*echo "<br>";
//*print_r($bulan);
//*echo "<br>";

// Menampilkan 1 elemen pada array
//*echo $arr1[0];
//*echo "<br>";
//*echo $bulan[1]

// Menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
?>

<?php 
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 2</title>
        <style>
            div {
                width: 50px;
                height: 50px;
                background-color: salmon;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
            }
        </style>
</head>
<body>

<?php for( $i = 0; $i <7; $i++ ) { ?>
   <div><?php echo $angka[$i]; ?></div> 
<?php } ?>