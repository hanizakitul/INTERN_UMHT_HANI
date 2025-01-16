<!-- 
Tugas 3
Buatlah program yang dapat memeriksa apakah suatu angka adalah bilangan prima atau bukan
note : angka prima hanya dapat dibagi oleh 1 dan dirinya sendiri
contoh :
7 adalah bilangan prima
8 bukan bilangan prima 
-->

<?php
function prima ($sumber) {
  for ($i =2; $i <=sqrt($sumber); $i++){
    if ($sumber % $i ==00){
      return false;
    }
  }
  return true;
}

$angka = 10; 

if (prima($angka)){
   echo "$angka adalah bilangan prima";
} else {
   echo "$angka bukan bilangan prima";
}

?>