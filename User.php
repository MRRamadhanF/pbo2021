<?php
    class User
    {
        protected $username;
        protected $password;

        function __construct($user, $pass){
            $this->username = $user;
            $this->password = $pass;
        }

        public function login(){
            return "$this->username telah berhasil login";
        }
        // setter
        public function setUsername($username){
            $this->username=$username;
        }
        public function setPassword($password){
            $this->password=$password;
        }
        // getter
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
    }
?>