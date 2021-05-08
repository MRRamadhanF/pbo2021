<?php
namespace App;

use App\Minuman;

class Cendol implements Minuman
{

    public function buat()
    {
        echo "masukan cendol,masukkan santan dan air gula merah cair";
        echo "tambahkan es batu sesuai selera";
    }

    public function minum()
    {
        echo "disedot dengan pipet/sedotan/selang";
    }

    public function diberikanPadaTeman()
    {
        echo "Ini untuk mu, tenang saja tidak ada sianida disana";
    }
}