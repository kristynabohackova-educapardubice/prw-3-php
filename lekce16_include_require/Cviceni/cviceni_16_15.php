<?php
// Cvičení 16.15 – Mini OOP projekt

class Produkt {
    public $nazev;
    public $cena;

    public function __construct($nazev, $cena) {
        $this->nazev = $nazev;
        $this->cena = $cena;
    }
}

class Kosik {
    private $polozky = [];

    public function pridej(Produkt $p) {
        $this->polozky[] = $p;
    }

    public function celkovaCena() {
        $suma = 0;
        foreach ($this->polozky as $p) {
            $suma += $p->cena;
        }
        return $suma;
    }

    public function vypis() {
        foreach ($this->polozky as $p) {
            echo $p->nazev . " – " . $p->cena . " Kč<br>";
        }
        echo "<strong>Celkem: " . $this->celkovaCena() . " Kč</strong>";
    }
}

$k = new Kosik();
$k->pridej(new Produkt("Mobil", 10000));
$k->pridej(new Produkt("Sluchátka", 1500));
$k->vypis();
?>
