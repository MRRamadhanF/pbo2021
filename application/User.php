<?php

namespace App;

class User
{
    protected $username;
    protected $password;

    function __construct($user, $pass)
    {
        $this->username = $user;
        $this->password = $pass;
    }

    public function login()
    {
        return "$this->username anda berhasil login";
    }
}