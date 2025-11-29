<?php
// Cvičení 5.12 – Výběr slevy

$vek = 20;
$maKartu = true;

if ($maKartu && $vek >= 18) {
    echo "Zákazník má nárok na 20% slevu.";
} else {
    echo "Zákazník nemá nárok na slevu.";
}
?>
