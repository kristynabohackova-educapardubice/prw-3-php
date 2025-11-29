<?php
// Cvičení 19.6 – Načti studenty

$json = file_get_contents("studenti.json");
$studenti = json_decode($json, true);

foreach ($studenti as $s) {
    echo $s . "<br>";
}
?>
