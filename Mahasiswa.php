<?php
    require_once("User.php");

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
        // setter
        public function setNama($nama){
        $this->nama=$nama;
        }
        public function setNim($nim){
            $this->nim=$nim;
        }
        public function setTanggalLahir($tanggal_lahir){
            $this->tanggal_lahir=$tanggal_lahir;
        }
        public function setJanisKelamin($jenis_kelamin){
            $this->jenis_kelamin=$jenis_kelamin;
        }
        // getter
        public function getNama(){
            return $this->nama;
        }
        public function getNim(){
            return $this->nim;
        }
        public function getTanggalLahir(){
            return $this->tanggal_lahir;
        }
        public function getJenisKelamin(){
            return $this->jenis_kelamin;
        }
    }
?>