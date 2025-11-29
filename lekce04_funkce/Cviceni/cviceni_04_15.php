<?php
// Cvičení 4.15 – Kombinovaná funkce

function infoVek($jmeno, $vek) {
    if ($vek < 18) {
        return "$jmeno je nezletilý/á.";
    } else {
        return "$jmeno je dospělý/á.";
    }
}

echo infoVek("Kristýna", 20);
?>
