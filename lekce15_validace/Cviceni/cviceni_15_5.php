<?php
// Cvičení 15.5 – Zapouzdření

class Osoba {
    private $jmeno;

    public function nastavJmeno($j) {
        $this->jmeno = $j;
    }

    public function vratJmeno() {
        return $this->jmeno;
    }
}

$o = new Osoba();
$o->nastavJmeno("David");
echo $o->vratJmeno();
?>
