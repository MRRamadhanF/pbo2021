<?php

use application\frontend\MyDate;

require_once 'initialize.php';

$dian = new Dosen('198411132015041001', 'Dian Prawira', '0800000', '50000000', '13118405', 'Tenaga Pengajar');

$dian->mengajar();
$dian->meneliti();

$rama = new Mahasiswa('H1101191029', 'Muh Ridha Ramadhan Fatriendi', '13-12-2001','L');
$rama->tampilkanAngkatan();

$tanggal = new MyDate();