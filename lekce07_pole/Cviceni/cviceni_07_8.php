<?php
// Cvičení 7.8 – Odebrání hodnoty z pole pomocí unset()

$ovoce = ["jablko", "banán", "hruška"];

unset($ovoce[1]); // smaže banán

print_r($ovoce);
?>
