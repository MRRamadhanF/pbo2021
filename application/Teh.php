<?php

namespace App;

class Teh  implements Minuman
{
    public function buat()
    {
        echo "masak air panas hingga 100 derajat";
        echo "masukan teh celup kedalam gelas";
        echo "tuangkan air panas kedalam gelas";
        echo "tambahkan gula sesuai selera";
    }

    public function minum()
    {
        echo "minum teh nya selagi panas agar nikmatnya terasa";
    }
}