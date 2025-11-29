<?php
// Cvičení 10.6 – Zápis hodnoty do session

session_start();

$_SESSION["barva"] = "modrá";

echo "Do session byla uložena barva = modrá.";
?>
