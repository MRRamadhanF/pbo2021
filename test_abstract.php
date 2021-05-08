<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\EsJeruk;
use App\Kopi;
use App\Teh;

$cendol_rama = new Cendol();
$cendol_rama->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();

$kopi_ache = new Kopi();
$kopi_ache->buat();
$kopi_ache->minum();

EsJeruk::dilihat();

$teh_babang = new Teh;
$teh_babang->buat();
$teh_babang->minum();