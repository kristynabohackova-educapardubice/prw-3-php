<?php
// Cvičení 15.14 – Konstruktor + metoda info()

class Kniha {
    public $nazev;
    public $autor;

    public function __construct($nazev, $autor) {
        $this->nazev = $nazev;
        $this->autor = $autor;
    }

    public function info() {
        echo "{$this->nazev}, autor: {$this->autor}";
    }
}

$k = new Kniha("1984", "George Orwell");
$k->info();
?>
