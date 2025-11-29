<?php
// Cvičení 19.13 – Array → JSON → soubor → zpět

$zvirata = ["pes", "kočka", "křeček"];

file_put_contents("zvirata.json", json_encode($zvirata));

$json = file_get_contents("zvirata.json");
$decoded = json_decode($json, true);

print_r($decoded);
?>
