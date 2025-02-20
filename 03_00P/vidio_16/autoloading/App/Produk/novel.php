<?php 

class Novel extends Produk implements InfoProduk {
    public $waktuBaca;

    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuBaca = 0) {
        parent::__construct(  $judul, $penulis, $penerbit, $harga, $waktuBaca = 0);

        $this->waktuBaca = $waktuBaca;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {
        $str = "Novel : " . $this->getInfo() . " - {$this->waktuBaca} Jam.";
        return $str;
    }
}










?>