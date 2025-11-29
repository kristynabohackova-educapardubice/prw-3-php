<?php
// Cvičení 10.13 – Pozdrav z cookie

if (isset($_COOKIE["uzivatel"])) {
    echo "Vítej zpět, " . $_COOKIE["uzivatel"] . "!";
} else {
    echo "Cookie 'uzivatel' neexistuje.";
}
?>
