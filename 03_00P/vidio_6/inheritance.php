<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlMenit,
           $waktuBaca;
    
     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlMenit = 0, $waktuBaca = 0) {
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlMenit = $jmlMenit;
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
        $str = "Film : " . parent::getInfoProduk() . " - {$this->jmlMenit} Menit.";
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


$produk1 = new Film("Pengabdi Setan", "Joko Anwar", "Maktabah Darus Sunnah", 45.000, 96, 0);
$produk2 = new Novel("Butterflies", "Ale", "CV Nexterday Group Ra", 265000, 0, 2);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>