<?php
// Cvičení 16.14 – Kombinované OOP

interface Akce {
    public function spustit();
}

class Program {
    public function info() {
        echo "Obecný program<br>";
    }
}

class Editor extends Program implements Akce {
    public function spustit() {
        echo "Editor spuštěn!";
    }
}

$p = new Editor();
$p->info();
$p->spustit();
?>
