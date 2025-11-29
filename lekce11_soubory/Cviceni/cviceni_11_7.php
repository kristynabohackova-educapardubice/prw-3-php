<?php
// Cvičení 11.7 – Velikost souboru

if (file_exists("data.txt")) {
    echo "Velikost: " . filesize("data.txt") . " B";
} else {
    echo "Soubor neexistuje.";
}
?>
