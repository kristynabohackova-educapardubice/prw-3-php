<?php
// Cvičení 19.8 – Kurzovní API

$url = "https://api.exchangerate.host/latest?base=EUR";
$json = @file_get_contents($url);

if ($json === false) {
    echo "API nedostupné.";
    exit;
}

$data = json_decode($json, true);

echo "1 EUR = " . $data["rates"]["CZK"] . " Kč";
?>
