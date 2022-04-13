<?php

// login :
// user-name
// email
// password

require_once __DIR__ . '/utenti.php';
class Logins extends Utenti {

    private $email;
    private $password;

    public function __construct(string $nome, string $cognome, string $indirizzo, string $_email, string $_password) {

        parent::__construct($nome, $cognome, $indirizzo);
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

    public function setLogin() {
        $email = $this -> email;
        $password = $this -> password;

        if (isset($email) && $email != null && 
            isset($password) && $password != null) {

            $this -> registrazione = true;
            
        } else {
            $this -> registrazione = false;
        }
    }

    public function setSconto() {
        if ($this -> registrazione = true) {
            $this -> sconto = 20;
        }
    }

};