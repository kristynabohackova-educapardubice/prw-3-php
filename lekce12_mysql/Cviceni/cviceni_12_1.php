<?php
// Cvičení 12.1 – Připojení k MySQL

$conn = mysqli_connect("localhost", "root", "", "skola");

if (!$conn) {
    die("Chyba připojení: " . mysqli_connect_error());
}

echo "Připojeno k databázi.";
?>
