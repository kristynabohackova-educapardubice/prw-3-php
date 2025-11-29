<?php
// Cvičení 15.3 – Metoda v objektu

class Osoba {
    public $jmeno;

    public function pozdrav() {
        echo "Ahoj, já jsem " . $this->jmeno;
    }
}

$o = new Osoba();
$o->jmeno = "Karel";
$o->pozdrav();
?>
