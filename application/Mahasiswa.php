<?php

namespace App;

class Mahasiswa extends User
{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 2;
    public static $status = self::AKTIF;
    public static $sks = 3;
    public static $bobot = 12;

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
    
    //static 
    public static function bergerak()
    {
        echo "agen solusi, bukan agen perubahan";
    }
    final public function tuntaskan()
    {
        self::bergerak();
        echo 'memperbaiki menjadi lebih baik';
    }
    //praktikum08
    public static function hitungSks()
    {
        echo "jumlah SKS nya adalah ". "<b>" . self::$sks * self::$bobot . "<b>" . "<br/>";
    }
}
?>