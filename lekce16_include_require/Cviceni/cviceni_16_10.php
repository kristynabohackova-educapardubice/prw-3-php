<?php
// Cvičení 16.10 – Validace

abstract class Uzivatel {
    private $jmeno;

    public function nastavJmeno($j) {
        if (strlen($j) < 3) {
            echo "Jméno je příliš krátké!";
            return;
        }
        $this->jmeno = $j;
    }

    public function vratJmeno() {
        return $this->jmeno;
    }
}

class Admin extends Uzivatel {}

$a = new Admin();
$a->nastavJmeno("Al");
$a->nastavJmeno("Alice");
echo $a->vratJmeno();
?>
