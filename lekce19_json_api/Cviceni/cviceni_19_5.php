<?php
// Cvičení 19.5 – Pole studentů → JSON

$studenti = ["Anna", "Petr", "Lukáš", "Tereza", "Marek"];

file_put_contents("studenti.json", json_encode($studenti));

echo "Soubor studenti.json byl uložen.";
?>
