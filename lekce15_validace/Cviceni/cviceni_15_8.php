<?php
// Cvičení 15.8 – Pole objektů

class Osoba {
    public $jmeno;
    public $prijmeni;
}

$osoby = [];

$osoby[] = (object)["jmeno" => "Anna", "prijmeni" => "Dvořáková"];
$osoby[] = (object)["jmeno" => "Petr", "prijmeni" => "Novotný"];
$osoby[] = (object)["jmeno" => "Lenka", "prijmeni" => "Králová"];

foreach ($osoby as $o) {
    echo $o->jmeno . " " . $o->prijmeni . "<br>";
}
?>
