<?php

class Pengguna {
    private $NIK;
    protected $nama;

    /*
    Konstruktor:
    Method yang memiliki nama yang sama dengan kelasnya.
    Digunakan untuk menginisialisasi objek dengan atributnya sekaligus.
    */
    public function __construct($nama){
        $this->nama = $nama;
    }


    // Method publik
    public function perkenalan ($nama) {
        $this->nama = $nama;
        echo "Perkenalan nama saya" . $this->nama . "<br>";

    }
}