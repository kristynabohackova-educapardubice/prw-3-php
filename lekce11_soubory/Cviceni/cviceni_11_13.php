<?php
// Cvičení 11.13 – Načíst a zobrazit uzivatele.txt

if (file_exists("uzivatele.txt")) {
    $obsah = file_get_contents("uzivatele.txt");
    echo nl2br($obsah);
} else {
    echo "Soubor neexistuje.";
}
?>
