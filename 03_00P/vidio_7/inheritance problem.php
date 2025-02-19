<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlMenit,
           $waktuMain,
           $tipe;
    
     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlMenit = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlMenit = $jmlMenit;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
     }      

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {

        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (rp. {$this->harga})";
        if( $this->tipe == "Film" ) {
            $str .= " - {$this->jmlMenit} Menit.";
        } else if( $this->tipe == "Novel" ) {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Pengabdi Setan", "Joko Anwar", "Maktabah Darus-Sunnah", 45000, 96, 0, "Film");
$produk2 = new Produk("Butterflies", "Ale", "CV Nexterday Group Ra", 265000, 269, 0, "Novel");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>