<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=neexistuje", "root", "");
} catch (PDOException $e) {
    echo "Chyba připojení: " . $e->getMessage();
}
?>
