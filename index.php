<?php

/* L’e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once __DIR__. '/prodotti.php';
require_once __DIR__. '/utenti.php';
require_once __DIR__. '/logins.php';


$prodotto1 = new Prodotti('crocchette', 'mangime', 20,00);
var_dump($prodotto1);

$utente1 = new Utenti('nico', 'il sardo');
var_dump($utente1);

$login1 = new Logins('nico', 'il sardo', 'ajeje@gmail.com', 'brazorf91');
var_dump($login1);

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
