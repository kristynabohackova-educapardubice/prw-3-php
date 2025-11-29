<?php
// Cvičení 4.6 – Výchozí parametr

function pozdrav($jmeno = "host") {
    return "Ahoj, $jmeno!";
}

echo pozdrav();
echo "<br>";
echo pozdrav("Eva");
?>
