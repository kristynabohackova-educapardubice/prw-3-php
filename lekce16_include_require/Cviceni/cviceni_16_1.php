<?php
// Cvičení 16.1 – Dědičnost a parent::

class Vozidlo {
    public function popis() {
        echo "Jsem obecné vozidlo.";
    }
}

class Auto extends Vozidlo {
    public function popis() {
        parent::popis();
        echo " A také jsem auto.";
    }
}

$a = new Auto();
$a->popis();
?>
