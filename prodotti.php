<?php

// prodotti :
// nome-prodotto
// categoria
// prezzo
// sconto

class Prodotti {

    public $nomeProdotto;
    public $categoria;
    public $prezzo;
    private $sconto;

    public function __construct(string $prodotto, string $_categoria, int $_prezzo) {
        $this -> nomeProdotto = $prodotto;
        $this -> categoria = $_categoria;
        $this -> prezzo = $_prezzo;
        $this -> setSconto();
    }

    public function setSconto() {
        $this -> sconto = 0;
    }

};