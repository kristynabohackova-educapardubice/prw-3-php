<?php
// Cvičení 19.7 – API počasí (wttr.in)

$url = "https://wttr.in/?format=j1";

$json = @file_get_contents($url);

if ($json === false) {
    echo "API není dostupné.";
    exit;
}

$data = json_decode($json, true);

echo "Aktuální teplota: " . $data["current_condition"][0]["temp_C"] . " °C";
?>
