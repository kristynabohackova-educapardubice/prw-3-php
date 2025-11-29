<?php
// Cvičení 19.15 – Crypto Checker

$url = "https://api.coindesk.com/v1/bpi/currentprice/BTC.json";

$json = @file_get_contents($url);

if ($json === false) {
    echo "API nedostupné.";
    exit;
}

$data = json_decode($json, true);

$cena = $data["bpi"]["USD"]["rate"];

echo "<h2>Bitcoin cena: $cena USD</h2>";

// Uložit do logu
$log = [
    "cas" => date("d.m.Y H:i:s"),
    "cena" => $cena
];

file_put_contents("crypto_log.json", json_encode($log));
?>
