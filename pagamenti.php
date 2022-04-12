<?php

// pagamenti :
// n.carta
// data scadenza
// tipologia (visa)
// cvv

class Pagamenti {

    private $numeroCarta;
    private $scadenza;
    private $cvv;
    private $tipologia;

    public function __construct($_nCarta, $_scadenza, $_cvv, $_tipo) {
        $this -> numeroCarta = $_nCarta;
        $this -> setScadenza($_scadenza);
        $this -> setCvv($_cvv);
        $this -> tipologia = $_tipo;
    }

    public function setScadenza($_scad) {
        $data = date('m/y');

        if ($_scad == $data) {
            echo 'la tua carta è scaduta';
            die();
        } else 
        $this -> scadenza = $_scad;
    }

    public function setCvv($cvv) {
        if (is_numeric($cvv) && strlen($cvv) == 3) {
            $this -> cvv = $cvv;
        }
    }

}