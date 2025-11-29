<?php
// Cvičení 15.4 – Konstruktor

class Osoba {
    public $jmeno;
    public $prijmeni;

    public function __construct($j, $p) {
        $this->jmeno = $j;
        $this->prijmeni = $p;
    }
}

$o = new Osoba("Tereza", "Malá");
echo $o->jmeno . " " . $o->prijmeni;
?>
