<?php
// Cvičení 15.6 – Třída Auto

class Auto {
    public $znacka;
    public $model;
    public $rok;

    public function popis() {
        echo "{$this->znacka} {$this->model} ({$this->rok})";
    }
}

$a = new Auto();
$a->znacka = "Škoda";
$a->model = "Octavia";
$a->rok = 2018;

$a->popis();
?>
