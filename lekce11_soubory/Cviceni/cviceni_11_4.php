<?php
// Cvičení 11.4 – Kontrola existence souboru

if (file_exists("log.txt")) {
    echo "Soubor existuje.";
} else {
    echo "Soubor neexistuje.";
}
?>
