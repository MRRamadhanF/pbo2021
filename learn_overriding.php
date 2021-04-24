<?php

class Pegawai
{
    public $nama;

    public function sapa()
    {
        echo "Halo " . $this->nama . " saat ini anda bertugas sebagai pegawai. Selamat bertugas \n";
    }
    public function masuk()
    {
        echo "Anda harus masuk kerja pada tanggal " .date('Y-m-d') . " dimohonkan kehadirannya \n";
    }
}

class StaffTu extends Pegawai
{
    public function sapa()
    {
        echo "Halo " . $this->nama . " anda merupakan Staff Tata usaha \n";
    }
    public function parentSapa()
    {
        return parent::sapa();
    }
}

$rama = new StaffTu ();
$rama->nama ='Ramadhan Fatriendi';
$rama->sapa();
$rama->masuk();
$rama->parentSapa();