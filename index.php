<?php

/* L’e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once __DIR__. '/prodotti.php';
require_once __DIR__. '/utenti.php';
require_once __DIR__. '/logins.php';
require_once __DIR__. '/pagamenti.php';


$prodotto1 = new Prodotti('crocchette', 'mangime', 20,00);
var_dump($prodotto1);

$utente1 = new Utenti('nico', 'il sardo');
$utente1 -> addPagamento(1234567891011, '05/26', 123, 'visa');
$utente1 -> addPagamento(1234567891011, '05/26', 123, 'mastercard');
var_dump($utente1);

$login1 = new Logins('nico', 'il sardo', 'ajeje@gmail.com', 'brazorf91');
var_dump($login1);

$pagamento1 = new Pagamenti(1234567891011, '05/26', 123, 'visa');
var_dump($pagamento1);

// carrello :
// prodotto -> collegato a prodotti
// quantità
// totale

// ordini :
// n. ordine
// prodotti 
// data consegna
// totale ordine


