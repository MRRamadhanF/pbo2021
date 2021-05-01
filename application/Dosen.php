<?php

namespace App;

class Dosen extends Pegawai
{
    protected $nidn;
    protected $jabatan_akademis;

    function __construct($nip, $nama, $hp, $gaji, $nidn, $jabatan)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gaji;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $jabatan;
    }

    public function mengajar()
    {
        echo $this->nama . " sedang mengajar<br>";
    }
    public function meneliti()
    {
        echo $this->nama . " sedang meneliti<br>";
    }
    public function getNama()
    {
        return $this->nama;
    }
}