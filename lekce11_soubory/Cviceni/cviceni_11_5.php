<?php
// Cvičení 11.5 – Mazání souboru

if (file_exists("test.txt")) {
    unlink("test.txt");
    echo "Soubor smazán.";
} else {
    echo "Soubor neexistuje.";
}
?>
