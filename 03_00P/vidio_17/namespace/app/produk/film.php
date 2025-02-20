<?php 

class Film extends Produk implements InfoProduk {
    public $jmlMenit;

    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlMmenit = 0 ) {

        parent::__construct(  $judul, $penulis, $penerbit, $harga, $jmlMenit = 0);

        $this->jmlMenit = $jmlMenit;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    
    public function getInfoProduk() {
        $str = "Film : " . $this->getInfo() . " - {$this->jmlMenit} Menit.";
        return $str;
    }
}





?>