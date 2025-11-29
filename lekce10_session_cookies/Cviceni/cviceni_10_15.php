<?php
// Cvičení 10.15 – Session + podmínka

session_start();

$_SESSION["role"] = "admin"; // jen pro ukázku

if (isset($_SESSION["role"]) && $_SESSION["role"] === "admin") {
    echo "Vítejte, administrátore.";
} else {
    echo "Nemáte administrátorská práva.";
}
?>
