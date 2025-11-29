<?php
// Cvičení 11.9 – Čtení pomocí fopen

if (file_exists("data.txt")) {
    $soubor = fopen("data.txt", "r");
    $obsah = fread($soubor, filesize("data.txt"));
    fclose($soubor);

    echo nl2br($obsah);
} else {
    echo "Soubor neexistuje.";
}
?>
