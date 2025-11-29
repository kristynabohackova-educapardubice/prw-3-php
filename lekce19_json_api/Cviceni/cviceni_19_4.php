<?php
// Cvičení 19.4 – Načti JSON

$json = file_get_contents("produkt.json");
$data = json_decode($json, true);

echo "Cena produktu je: " . $data["cena"];
?>
