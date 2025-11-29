<?php
// Cvičení 15.9 – Produkt

class Produkt {
    public $nazev;
    public $cena;

    public function sleva($percent) {
        return $this->cena - ($this->cena * ($percent / 100));
    }
}

$p = new Produkt();
$p->nazev = "Telefon";
$p->cena = 10000;

echo "Po slevě: " . $p->sleva(20);
?>
