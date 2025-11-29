<?php
// Cvičení 19.3 – Ulož produkt do JSON

$produkt = [
    "nazev" => "Notebook",
    "cena" => 15000,
    "skladem" => true
];

file_put_contents("produkt.json", json_encode($produkt));

echo "Soubor produkt.json byl vytvořen.";
?>
