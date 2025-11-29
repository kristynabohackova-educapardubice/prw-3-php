<?php
// Cvičení 19.14 – Výpis více kurzů

$url = "https://api.exchangerate.host/latest?base=EUR";
$data = json_decode(@file_get_contents($url), true);

$rates = $data["rates"];

$pole = array_slice($rates, 0, 5);

foreach ($pole as $mena => $kurz) {
    echo "$mena: $kurz<br>";
}
?>
