<?php
// Cvičení 11.10 – Zápis pomocí fwrite

$soubor = fopen("text.txt", "w");
fwrite($soubor, "Toto je zapsáno pomocí fwrite().");
fclose($soubor);

echo "Zapsáno.";
?>
