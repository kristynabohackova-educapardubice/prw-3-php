<?php
// Cvičení 6.5 – Součet prvků pole

$cisla = [3, 7, 5, 10];
$soucet = 0;

for ($i = 0; $i < count($cisla); $i++) {
    $soucet += $cisla[$i];
}

echo "Součet: $soucet";
?>
