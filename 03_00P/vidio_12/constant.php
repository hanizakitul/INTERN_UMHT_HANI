<?php

// define('NAMA', 'Hanoyy');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;


// class coba {
//     const NAMA = 'Hanoyy';
// }

// echo Coba::NAMA;

// echo _LINE_;

// function coba() {
//     return _FUNCTION_;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;






?>