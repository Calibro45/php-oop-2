<?php

// login :
// user-name
// email
// password

require_once __DIR__ . '/utenti.php';
class Logins extends Utenti {

    public $email;
    public $password;

    public function __construct(string $nome, string $cognome, string $_email, string $_password) {

        parent::__construct($nome, $cognome);
        $this -> setEmail($_email);
        $this -> setPassword($_password);
        $this -> setSconto();
        $this -> setLogin();
    }

    public function setEmail($_email) {
        if ($_email != '') {
            $this -> email = $_email;
        }
    }

    public function setPassword($_password) {
        if ($_password != '') {
            $this -> password = $_password;
        }
    }

    public function setSconto() {
        if (isset($this -> email) && isset($this -> password)) {
            $this -> sconto = 20;
        }
    }

    public function setLogin() {
        if (isset($this -> email) && isset($this -> password)) {
            $this -> registrazione = true;
        }
    }
};