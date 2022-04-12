<?php

// login :
// user-name
// email
// password

require_once __DIR__ . '/utenti.php';
class Logins extends Utenti {

    public $userName;
    public $email;
    public $password;

    public function __construct(string $nome, string $cognome, string $_userName, string $_email, string $_password) {
        parent::__construct($nome, $cognome);
        $this -> userName = $_userName;
        $this -> email = $_email;
        $this -> password = $_password;
    }
};