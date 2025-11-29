<?php
// Cvičení 10.7 – Čtení hodnoty ze session

session_start();

if (isset($_SESSION["barva"])) {
    echo "Barva v session: " . $_SESSION["barva"];
} else {
    echo "Hodnota 'barva' v session není nastavena.";
}
?>
