<?php

// pagamenti :
// n.carta
// data scadenza
// tipologia (visa)
// cvv

class Pagamenti {

    private $numeroCarta;
    private $scadenza;
    private $cvv;
    private $tipologia;

    public function __construct($_nCarta, $_scadenza, $_cvv, $_tipo) {
        $this -> numeroCarta = $_nCarta;
        $this -> scadenza = $_scadenza;
        $this -> cvv = $_cvv;
        $this -> tipologia = $_tipo;
    }

}