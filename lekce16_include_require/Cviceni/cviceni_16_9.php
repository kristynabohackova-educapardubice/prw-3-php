<?php
// Cvičení 16.9 – Abstraktní metoda

abstract class Zamestnanec {
    public $jmeno;

    public function __construct($jmeno) {
        $this->jmeno = $jmeno;
    }

    abstract public function plat();
}

class Brigadnik extends Zamestnanec {
    public function plat() {
        return 12000;
    }
}

class Manager extends Zamestnanec {
    public function plat() {
        return 40000;
    }
}

$z = [new Brigadnik("Petr"), new Manager("Karel")];

foreach ($z as $zam) {
    echo $zam->jmeno . " – " . $zam->plat() . " Kč<br>";
}
?>
