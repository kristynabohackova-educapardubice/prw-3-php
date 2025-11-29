<?php
// Cvičení 10.8 – Ověření existence session klíče

session_start();

if (isset($_SESSION["user"])) {
    echo "Uživatel je přihlášen: " . $_SESSION["user"];
} else {
    echo "Uživatel není přihlášen.";
}
?>
