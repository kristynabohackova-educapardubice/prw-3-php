<?php
// Cvičení 15.7 – Dědičnost

class Student {
    public $jmeno;
    public $rocnik;
}

class ITStudent extends Student {
    public $specializace = "Informační technologie";
}

$s = new ITStudent();
$s->jmeno = "Lukáš";
$s->rocnik = 3;

echo $s->jmeno . " – " . $s->specializace;
?>
