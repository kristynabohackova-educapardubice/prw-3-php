<?php
// Cvičení 7.15 – Vypiš všechny hodnoty pole

$osoba = [
    "jmeno" => "Kristýna",
    "vek" => 20,
    "mesto" => "Brno"
];

$hodnoty = array_values($osoba);

print_r($hodnoty);
?>
