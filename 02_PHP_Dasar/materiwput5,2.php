<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <tittle>Latihan1</tittle>
        <style>
            .warna-baris {
                background-color: silver;
            }
        </style>
</head>
</body>

<table border="1" cellppading="10" cellsparcing="0">
    <?php for ($i = 1; $i <=3; $i++) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else: ?>
        <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++) : ?>
             <td><?= "$i, $j"; ?></td>
             <?php endfor; ?>
        </tr>
        <?php endfor; ?>
</table>

</body>
</html>
