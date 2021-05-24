<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$rama = new Pengguna(4, "Ramadhan", new Alamat(1, "Pontianak"));

$lapak_tegar = new Penjual();
$lapak_tegar->setName('Tegar Fer');
$lapak_tegar->setId(1);

$lapak_ahmad = new Penjual();
$lapak_ahmad->setName('Ahmad aja');
$lapak_ahmad->setId(2);

$lapak_baim = new Penjual();
$lapak_baim->setName('Ibrahim');
$lapak_baim->setId(3);


$rama->setPenjual($lapak_tegar);
$rama->setPenjual($lapak_ahmad);
$rama->setPenjual($lapak_baim);

$penjual_rama = $rama->getPenjual();
echo $penjual_rama[0]->getName();
// ada 3 index 0,1,2