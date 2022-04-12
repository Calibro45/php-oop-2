<?php

// login :
// user-name
// email
// password

class Logins {

    public $userName;
    public $email;
    public $password;

    public function __construct(string $_userName, string $_email, string $_password) {
        $this -> userName = $_userName;
        $this -> email = $_email;
        $this -> password = $_password;
    }
};