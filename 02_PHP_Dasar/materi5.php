<?php
// Pengulangan 
// for
// while 
// do.. whilw 
// foreach : pengulangan khusus array 

// for ( $i = 0; $i < 5; $i++ ){
// echo "Hello world! <br>";
// }

$i =0;
while( $i < 5){
    echo "Hello world! <br>";
    $i++;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <tittle>Latihan1</tittle>
</head>
</body>

<table border="1" cellppading="10" cellsparcing="0">
    <?php for ($i = 1; $i <=3; $i++) : ?>
        <tr>
            <?php for ( $j = 1; $j <=5; $j++)
            : ?>
            <td><?= "$j, $j";?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor;?>
    </table>

 </body>
</html>
