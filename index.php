<?php

/* L’e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

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

$prodotto1 = new Prodotti('crocchette', 'mangime', 20,00);
var_dump($prodotto1);

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

$utente1 = new Utenti('nico', 'il sardo');
var_dump($utente1);

// login :
// user-name
// email
// password

// carrello :
// prodotto
// quantità
// totale

// ordini :
// n. ordine
// data consegna
// totale ordine

// pagamenti :
// n.carta
// data scadenza
// tipologia (visa)
// cvv
