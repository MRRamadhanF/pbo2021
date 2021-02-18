<?php
include ("Mahasiswa.php");

$rama = new Mahasiswa();
$tegar = new Mahasiswa();
$bayu = new Mahasiswa();

$rama->nim = "H1101191029"; 
$rama->nama = "Muh Ridha Ramadhan Fatriendi";
$rama->tanggal_lahir = "13-12-2001";
$rama->jenis_kelamin = "Laki-laki <br>";

$tegar->nim = "H1101191071"; 
$tegar->nama = "Tegar Ferdigantara";
$tegar->tanggal_lahir = "24-09-2001";
$tegar->jenis_kelamin = "Laki-laki <br>";

$bayu->nim = "H1101191047"; 
$bayu->nama = "Bayu Firmadi";
$bayu->tanggal_lahir = "18-10-2001";
$bayu->jenis_kelamin = "Laki-laki <br>" ;
?>