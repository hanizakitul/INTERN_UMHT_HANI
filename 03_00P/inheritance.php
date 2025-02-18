<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuBaca;
    
     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuBaca = 0) {
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuBaca = $waktuBaca;
     }      

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}


class Film extends Produk {
    public function getInfoProduk() {
        $str = "Film : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Novel extends Produk {
    public function getInfoProduk() {
        $str = "Novel : {$this->judul} | {$this->getLabel()} (rp. {$this->harga}) - {$this->waktuBaca} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Pengabdi Setan", "Joko Anwar", "Maktabah Darus-Sunnah", 45000);
$produk2 = new Produk("Butterflies", "Ale", "CV Nexterday Group Ra", 265000);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>