<?php
// Cvičení 11.3 – Přidání textu na konec souboru

file_put_contents("data.txt", "Další řádek\n", FILE_APPEND);
echo "Přidáno.";
?>
