<?php
// Cvičení 13.1 – Připojení k databázi pomocí PDO

try {
    $conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Připojeno!";
} catch (PDOException $e) {
    echo "Chyba: " . $e->getMessage();
}
?>
