<?php
// Cvičení 10.2 – Načtení cookie

if (isset($_COOKIE["jazyk"])) {
    echo "Hodnota cookie 'jazyk': " . $_COOKIE["jazyk"];
} else {
    echo "Cookie 'jazyk' neexistuje.";
}
?>
