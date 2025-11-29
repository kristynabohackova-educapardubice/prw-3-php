<?php
// Cvičení 15.2 – Vytvoření objektu Osoba

class Osoba {
    public $jmeno;
    public $prijmeni;
}

$o = new Osoba();
$o->jmeno = "Anna";
$o->prijmeni = "Nováková";

echo $o->jmeno . " " . $o->prijmeni;
?>
