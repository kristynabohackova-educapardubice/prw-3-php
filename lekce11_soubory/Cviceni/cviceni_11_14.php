<?php
// Cvičení 11.14 – Pole → soubor (řádek po řádku)

$slova = ["auto", "kolo", "dům", "strom"];

file_put_contents("slova.txt", "");
foreach ($slova as $slovo) {
    file_put_contents("slova.txt", $slovo . "\n", FILE_APPEND);
}

echo "Zapsáno.";
?>
