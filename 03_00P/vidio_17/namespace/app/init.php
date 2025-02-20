<?php 

// require_once 'App/Produk/infoProduk.php';
// require_once 'App/produk/Produk.php';
// require_once 'App/produk/Film.php';
// require_once 'App/Produk/Novel.php';
// require_once 'App/Produk/CetakInfoProduk.php';
// require_once 'Produk//User.php';

// require_once 'Service/User.php';


spl_autoload_register(function( $class ){

    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ .'/Produk/' . $class .
     '.php';

});

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ .'/Service/' . $class . '.php';

});