<?php
// Cvičení 19.10 – API parametry

$mena = $_GET["mena"] ?? "USD";

$url = "https://api.exchangerate.host/latest?base=$mena";
$json = @file_get_contents($url);

$data = json_decode($json, true);

echo "Aktuální kurzy pro: $mena<br>";
echo "<pre>";
print_r($data["rates"]);
echo "</pre>";
?>
