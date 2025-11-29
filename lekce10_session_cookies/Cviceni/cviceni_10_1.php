<?php
// Cvičení 10.1 – Nastavení cookie

setcookie("jazyk", "cz", time() + 3600); // platnost 1 hodina

echo "Cookie 'jazyk' byla nastavena.";
?>
