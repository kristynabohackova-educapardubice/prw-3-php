<?php
// Cvičení 15.13 – Setter s validací

class Osoba {
    private $jmeno;

    public function nastavJmeno($j) {
        if (empty(trim($j))) {
            echo "Jméno nesmí být prázdné!";
            return;
        }
        $this->jmeno = $j;
    }

    public function vratJmeno() {
        return $this->jmeno;
    }
}

$o = new Osoba();
$o->nastavJmeno("  ");
$o->nastavJmeno("Eva");

echo $o->vratJmeno();
?>
