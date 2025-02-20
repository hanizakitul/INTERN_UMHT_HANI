<?php 

// require_once 'App/Produk/initProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Idol.php';
// require_once 'App/Produk/Novel.php';
// require_once 'App/Produk/CetakInfoProduk.php';


spl_autoload_register(function( $class ){
    require_once __DIR__ .'/Produk/' . $class . '.php';

});