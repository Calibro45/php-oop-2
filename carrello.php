<?php

// carrello :
// prodotto -> collegato a prodotti
// quantità
// totale articolo
// totale carrello

require_once __DIR__. '/prodotti.php';

class Carrello extends Prodotti {

    public $articoli = [];
    public $totaleCarrello;

    public function __construct(string $prodotto, string $_categoria, int $_prezzo, int $_quantita) {
        $this -> addProdotto($prodotto, $_categoria, $_prezzo, $_quantita);
    }

    public function addProdotto($nome, $categoria, $prezzo, $quantita) {
        array_push($this -> articoli, new Prodotti($nome, $categoria, $prezzo, $quantita));
    }

    


}