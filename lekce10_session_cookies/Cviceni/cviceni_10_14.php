<?php
// Cvičení 10.14 – Počítání návštěv

if (isset($_COOKIE["pocet"])) {
    $pocet = $_COOKIE["pocet"] + 1;
} else {
    $pocet = 1;
}

setcookie("pocet", $pocet, time() + 3600);

echo "Toto je tvoje návštěva číslo: " . $pocet;
?>
