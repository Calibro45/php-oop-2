<?php

// carrello :
// prodotto -> collegato a prodotti
// quantità
// totale articolo
// totale carrello

require_once __DIR__. '/prodotti.php';
require_once __DIR__. '/logins.php';
require_once __DIR__. '/ordini.php';

class Carrello extends Logins {

    private $articoli = [];
    private $totale;
    protected $acquisto;

    public function __construct($nome, $cognome, $indirizzo, $email, $password) {
        parent::__construct($nome, $cognome, $indirizzo, $email, $password);
    }

    public function addProdotto($nome, $categoria, $prezzo, $quantita) {
        array_push($this -> articoli, new Prodotti($nome, $categoria, $prezzo, $quantita));
        $this -> setTotale();
    }

    public function removeProdotto(int $index) {
        array_splice($this -> articoli, $index, $index);
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

        $this -> setTotSconto($totale, $this -> registrazione, $this -> sconto);

    }

    public function setTotSconto($tot, $registrazione, $sconto) {

        if ($registrazione == true) {
            $scontoPerc = $sconto / 100;
            $totScontato = $tot * $scontoPerc;
            $subTot = $tot - $totScontato;
            $this -> totale = number_format($subTot,2);

        } else {
            $this -> totale = number_format($tot, 2);
        }
    }

    public function acquista() {
        $this -> acquisto = new Ordini();
    }
    
}