<?php 

// Jualan mobil

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}
// $produk1 = new Produk();
// $produk1->judul = "Sasuke";
// var_dump($produk1);

// $produk = new Produk();
// $produk->judul = "Uncharted";
// $produk2->tambahProperty = "wkwkk";
// var_dump($produk2);
// 

$produk3 = new Produk();
$produk3->judul = "Pengabdi Setan";
$produk3->penulis = "Joko Anwar";
$produk3->penerbit = "Maktabah Darus-Sunnah";
$produk3->harga = 45000;

echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Butterflies";
$produk4->penulis = "Ale";
$produk4->penerbit = "CV Nexterday Group Ra";
$produk4->harga = 265000;

echo "Film : " . $produk3->getLabel();
echo "<br>";
echo "Novel : " . $produk4->getLabel();
?>