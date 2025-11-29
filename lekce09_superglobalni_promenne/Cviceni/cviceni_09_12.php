<?php
// Cvičení 9.12 – Čtení session

session_start();

if (isset($_SESSION["jmeno"])) {
    echo "Jméno v session: " . $_SESSION["jmeno"];
} else {
    echo "V session není žádná hodnota.";
}
?>
