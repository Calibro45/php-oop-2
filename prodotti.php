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
    public $quantita;
    private $sconto;

    public function __construct(string $prodotto, string $_categoria, int $_prezzo, int $_quantita) {
        $this -> nomeProdotto = $prodotto;
        $this -> categoria = $_categoria;
        $this -> prezzo = $_prezzo;
        $this -> setSconto();
        $this -> setQuantita($_quantita);
    }

    public function setSconto() {
        $this -> sconto = 0;
    }

    public function setQuantita(int $_quantita) {
        if ($_quantita != 1) {
            $this -> quantita = $_quantita;
        } else 
        $this -> quantita = 1;
    }

};