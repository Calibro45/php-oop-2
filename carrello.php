<?php

// carrello :
// prodotto -> collegato a prodotti
// quantità
// totale articolo
// totale carrello

require_once __DIR__. '/prodotti.php';

class Carrello extends Prodotti {

    public $articoli = [];
    private $totaleCarrello;

    public function __construct(string $prodotto, string $_categoria, int $_prezzo, int $_quantita) {
        $this -> addProdotto($prodotto, $_categoria, $_prezzo, $_quantita);
        $this -> setTotale();
    }

    public function addProdotto($nome, $categoria, $prezzo, $quantita) {
        array_push($this -> articoli, new Prodotti($nome, $categoria, $prezzo, $quantita));
        $this -> setTotale();
    }

    public function setTotale() {
        $totale = 0;

        foreach ($this -> articoli as $prodotto) {
            $quantita = $prodotto -> quantita;
            $prezzo = $prodotto -> prezzo;

            if ($quantita > 1) {
                $totale += $prezzo * $quantita; 
            } else {
                $totale += $prezzo;
            }
        }

        $this -> totaleCarrello = $totale;
    }
    
}