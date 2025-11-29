<?php
// Cvičení 11.1 – Načti soubor data.txt

$obsah = file_get_contents("data.txt");
echo nl2br($obsah);
?>
