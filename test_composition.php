<?php
require_once('vendor/autoload.php');

use App\Alamat;
use App\Pengguna;

$pengguna = new Pengguna(4, "Rama", new Alamat(1, "Pontianak"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();