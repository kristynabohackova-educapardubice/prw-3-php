<?php
// Cvičení 11.8 – Datum poslední změny

if (file_exists("data.txt")) {
    echo "Poslední změna: " . date("d.m.Y H:i:s", filemtime("data.txt"));
} else {
    echo "Soubor neexistuje.";
}
?>
