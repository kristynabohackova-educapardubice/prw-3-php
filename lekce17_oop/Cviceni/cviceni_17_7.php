<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "Nepřihlášen!<br>";
    exit;
}

echo "Toto vidíš jen jako přihlášený uživatel.";
?>
