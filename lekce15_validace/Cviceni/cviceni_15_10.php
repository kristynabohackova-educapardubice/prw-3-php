<?php
// Cvičení 15.10 – Bankovní účet

class Banka {
    private $zustatek = 0;

    public function vklad($castka) {
        $this->zustatek += $castka;
    }

    public function vyber($castka) {
        $this->zustatek -= $castka;
    }

    public function stav() {
        return $this->zustatek;
    }
}

$b = new Banka();
$b->vklad(500);
$b->vyber(200);

echo "Zůstatek: " . $b->stav();
?>
