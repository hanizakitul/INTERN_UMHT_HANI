 <!-- 
Tugas 4
 Buatlah program untuk menghitung volume dari prisma segitiga dengan menentukan nilai awal
 Contoh :
 a = 5
 b = 3
 t = 10
 volume dari prisma segitiga adalah ... cm 
 -->

 <?php
  function HitungVolume($a,$b,$t){
    $alas= 0.5*$a*$b;               
    $volume= $alas*$t;

    return $volume;
  }

  $volume=HitungVolume(20,5,4);
  echo "Volume Prisma segitiga adalah $volume cm <br>";
?>
