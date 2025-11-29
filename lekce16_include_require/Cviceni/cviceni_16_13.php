<?php
// Cvičení 16.13 – Pole objektů

class Osoba {
    public $jmeno;
    public $email;

    public function __construct($j, $e) {
        $this->jmeno = $j;
        $this->email = $e;
    }
}

class Kolekce {
    private $polozky = [];

    public function pridej($objekt) {
        $this->polozky[] = $objekt;
    }

    public function vypis() {
        foreach ($this->polozky as $o) {
            echo $o->jmeno . " – " . $o->email . "<br>";
        }
    }
}

$k = new Kolekce();
$k->pridej(new Osoba("Anna", "anna@example.com"));
$k->pridej(new Osoba("Petr", "petr@example.com"));

$k->vypis();
?>
