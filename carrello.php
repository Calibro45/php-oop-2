<?php

// carrello :
// prodotto -> collegato a prodotti
// quantità
// totale articolo
// totale carrello

require_once __DIR__. '/prodotti.php';

class Carrello {

    private $articoli = [];
    private $totaleCarrello;


    public function addProdotto($nome, $categoria, $prezzo, $quantita) {
        array_push($this -> articoli, new Prodotti($nome, $categoria, $prezzo, $quantita));
        $this -> setTotale();
    }

    public function removeProdotto(int $index) {
        array_splice($this -> articoli, $index, $index);
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