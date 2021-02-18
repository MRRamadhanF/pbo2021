<?php
 
class Mahasiswa 
{
    public $nim;
    public $nama;
    public $tanggal_lahir;
    public $jenis_kelamin;

    public function tampilkanAngkatan()
    {
        echo " Nim $this->nim Nama $this->nama Tanggal lahir $this->tanggal_lahir Jenis kelamin $this->jenis_kelamin ";
    }

    public function tampilkanUmur()
    {

        
    }
}
?>