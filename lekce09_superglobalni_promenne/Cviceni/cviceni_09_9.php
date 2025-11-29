<?php
// Cvičení 9.9 – Čtení cookie

if (isset($_COOKIE["uzivatel"])) {
    echo "Cookie 'uzivatel': " . $_COOKIE["uzivatel"];
} else {
    echo "Cookie 'uzivatel' neexistuje.";
}
?>
