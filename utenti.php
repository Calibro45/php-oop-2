<?php

// utenti:
// nome
// cognome
// indirizzo
// metodi pagamenti
// registrazione si/no
// sconto

class Utenti {

    public $nome;
    public $cognome;
    public $indirizzo;
    public $metodiPagamento;
    public $registrazione = false;
    public $sconto;

    public function __construct(string $_nome, string $_cognome) {
        $this -> nome = $_nome;
        $this -> cognome = $_cognome;
    }
};