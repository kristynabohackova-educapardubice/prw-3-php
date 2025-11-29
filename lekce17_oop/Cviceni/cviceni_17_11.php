<?php
session_start();

if (!empty($_POST["heslo"]) && $_POST["heslo"] === "admin123") {
    $_SESSION["role"] = "admin";
}

if (!isset($_SESSION["role"])) {
    echo "Nejste přihlášen jako admin.<br>";
    exit;
}

echo "Vítej v administraci!";
?>
