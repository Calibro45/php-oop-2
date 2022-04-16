<?php

// ordini :

class Ordini {

    public $nOrdine = 0;

    public function __construct() {
        $this -> nuvoOrdine();
    }

    public function nuvoOrdine() {
        $ordini = [];
        $this -> nOrdine++;

        if (!in_array($this -> nOrdine, $ordini)) {
            array_push($ordini, $this -> nOrdine);
        }
    }
    
}