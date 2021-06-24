<?php

namespace App\Models;

use App\Models;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class TugasAkhir
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;
    
    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }

    public function setMahasiswaTA(Mahasiswa $mahasiswa)
    {
        $this->mahasiswaTA = $mahasiswa;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getJudulTA()
    {
        return $this->judulTA;
    }

    public function getMahasiswaTA()
    {
        return $this->mahasiswaTA;
    }

    public function getPembimbingTA()
    {
        return $this->pembimbingTA;
    }

    public function getPengujiTA()
    {
        return $this->pengujiTA;
    }

    public function tambahTA()
    {
    }
    
}
