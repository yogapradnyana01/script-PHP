<?php
require 'Pengguna.php';
require 'Dosen.php';
require 'Mahasiswa.php';

// Membuat objek dari kelas pengguna()
$pengguna = new pengguna("adi",);
$pengguna = new pengguna("arya");
$pengguna->perkenalan();

// Membuat objek dari kelas dosen()
$Dosen_1 = new Dosen("made", "0822048001", "Backend Web Development");
$Dosen_1 = new Dosen("susi","0820029005", "Rekayasa Perangkat Lunak");
$Dosen_1->perkenalan();
$Dosen_1->getMatakuliah();

// Membuat objek dari kelas Mahasiswa()
$Mahasiswa_1 = new Mahasiswa("Komang", "200010111", 24);
$Mahasiswa_1 = new Mahasiswa("arya", "200030272", 18);
$Mahasiswa_1->perkenalan();
$Mahasiswa_1->getjumlahSKS();


