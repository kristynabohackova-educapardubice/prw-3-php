<?php
// Cvičení 16.8 – Polymorfismus

class Auto {
    public function start() { echo "Nastartováno auto"; }
}

class Motorka {
    public function start() { echo "Nastartována motorka"; }
}

function nastartuj($v) {
    $v->start();
}

nastartuj(new Auto());
echo "<br>";
nastartuj(new Motorka());
?>
