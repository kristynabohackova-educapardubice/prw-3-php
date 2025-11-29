<?php
// Cvičení 7.5 – Foreach s klíčem i hodnotou

$osoba = [
    "jmeno" => "Kristýna",
    "vek" => 20,
    "mesto" => "Brno"
];

foreach ($osoba as $klic => $hodnota) {
    echo "$klic: $hodnota<br>";
}
?>
