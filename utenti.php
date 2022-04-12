<?php

// utenti:
// nome
// cognome
// indirizzo
// metodi pagamenti
// registrazione si/no
// sconto

require_once __DIR__. '/pagamenti.php';
class Utenti {

    public $nome;
    public $cognome;
    public $indirizzo;
    private $metodiPagamento = [];
    protected $registrazione = false;
    protected $sconto;

    public function __construct(string $_nome, string $_cognome, string $_indirizzo) {
        $this -> nome = $_nome;
        $this -> cognome = $_cognome;
        $this -> indirizzo = $_indirizzo;

    }

    public function addPagamento($numeroCarta, $scadenza, $cvv, $tipo) {
        array_push($this -> metodiPagamento, new Pagamenti($numeroCarta, $scadenza, $cvv, $tipo));
    }

};