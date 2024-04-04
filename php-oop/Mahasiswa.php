<?php

class Mahasiswa extends Pengguna {
    private $NIM;
    public $jumlahSKS;

    public function __construct($nama,$nim, $jumlahSKS) {
        parent::__construct($nama);
        $this->NIM = $nim;
        $this->jumlahSKS = $jumlahSKS;
    }

    public function getNamaMahasiswa() {
        return $this->getNama();
    }

    public function getjumlahSKS() {
        echo "jumlah SKS " . $this->getNamaMahasiswa(). " sebesar " . $this->jumlahSKS . "SKS.";
    }
}
