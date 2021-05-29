<?php

namespace App;

/**
 * Trait untuk tanggal lahir
 */
trait Birthday
{
    public function birthDate($tanggal, $bulan, $tahun)
    {
        return "Anda lahir pada tanggal $tanggal, bulan $bulan, tahun $tahun";
    }
}
