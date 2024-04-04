<?php

class Dosen extends Pengguna {
    private $NIDN;
    Public $mataKuliah;

    public function __construct($nama, $nidn, $matakuliah) {
        parent::__construct($nama);
        $this->NIDN = $nidn;
        $this->mataKuliah = $matakuliah;
    }

    public function getNamaDosen(){
        return $this->nama;
    }

    public function getMatakuliah(){
        echo "Mata Kuliah" . $this->mataKuliah . " diampu oleh Bapak/Ibu " . $this->getNamaDosen() . "<br>";
    }

}
