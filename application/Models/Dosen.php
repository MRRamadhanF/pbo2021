<?php

namespace App\Models;

require_once('Pengguna.php');

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa()
    {
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }


    public function presensiMasuk()
    {
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}