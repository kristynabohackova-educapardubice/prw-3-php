<?php
// Cvičení 7.14 – Vypiš všechny klíče pole

$osoba = [
    "jmeno" => "Kristýna",
    "vek" => 20,
    "mesto" => "Brno"
];

$klice = array_keys($osoba);

print_r($klice);
?>
