<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak januari 1970
// echo time();
//100 hari kedepan hari
    //echo date("d-M-Y", time()+60*60*24*100);
// 100 hari kebekanh hari 
    //echo date("d-M-Y", time()-60*60*24*100);

 // mktime
 // membuat sendiri detik
 // mktime(0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun 
// ulang taun saya/ hari lahir saya 
// echo date ("l", mktime(0,0,0,3,7,2007));

//strtotime
//echo date("l" strtotime(7 maret 2007));

?>

<?php 
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Hani"); ?></h1>
</body>
</html>