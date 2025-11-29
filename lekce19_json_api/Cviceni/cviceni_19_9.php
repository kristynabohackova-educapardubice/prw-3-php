<?php
// Cvičení 19.9 – Error handling

$url = "https://api.exchangerate.host/latest";
$json = @file_get_contents($url);

if ($json === false) {
    echo "API neodpovídá.";
    exit;
}

$data = json_decode($json, true);

echo "Základní měna: " . $data["base"];
?>
