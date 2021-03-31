<?php

class Mahasiswa extends User
{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;

    //untuk menghemat baris
    function __construct($nim, $nama, $tgl, $jk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }
    public function tampilkanAngkatan()
    {
        echo " Merupakan angkatan tahun 20" . substr($this->nim , 5,-4)."<br>";

    }

    public function tampilkanUmur()
    {
        $tgl_lahir = date_create($this->tanggal_lahir);
        $umur = date_diff($tgl_lahir, date_create("today"))->y;
        echo " Berusia " . $umur;
    }

    public function tampilkanNama()
    {
        echo $this->nama;
    }
}
?>