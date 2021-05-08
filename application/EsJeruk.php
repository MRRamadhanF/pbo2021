<?php

namespace App;

class EsJeruk  implements Minuman
{
    public function minum()
    {
        echo "Silahkan diminum";
    }

    public function buat()
    {
        echo "Peras jeruk, lalu tambahkan es batu sesuai selera";
    }

    public static function dilihat()
    {
        echo "Cuma boleh dilihat tak boleh diminum";
    }
}