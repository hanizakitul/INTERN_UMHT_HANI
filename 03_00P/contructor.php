<?php 

// Jualan mobil

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
     public function __construct( $judul, $penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
     }      

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Pengabdi Setan", "Joko Anwar", "Maktabah Darus-Sunnah", 45000);
$produk2 = new Produk("Butterflies", "Ale", "CV Nexterday Group Ra", 265000);
echo "Film : " . $produk1->getLabel();
echo "<br>";
echo "Novel : " . $produk2->getLabel();
?>
