<?php
// Cvičení 11.15 – Soubor → pole pomocí file()

if (file_exists("slova.txt")) {
    $pole = file("slova.txt");
    echo "<pre>";
    print_r($pole);
    echo "</pre>";
} else {
    echo "Soubor neexistuje.";
}
?>
