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
    protected $sconto;

    public function __construct(string $prodotto, string $_categoria, int $_prezzo, $_quantita) {
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
        $this -> quantita = $_quantita;
    }

};