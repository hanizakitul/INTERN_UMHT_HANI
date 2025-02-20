<?php 

require_once 'App/init.php';

$produk1 = new Film("Pengabdi Setan", "Joko Anwar", " Maktabah Darus-Sunnah", 45000, 96);
$produk2 = new Novel("Butterflies", "Ale", "CV Nexterday Group Ra", 265000, 264);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();