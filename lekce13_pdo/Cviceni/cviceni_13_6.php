<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->prepare("DELETE FROM studenti WHERE id = ?");
$stmt->execute([3]);

echo "Záznam smazán.";
?>
