<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->prepare("UPDATE studenti SET vek = ? WHERE id = ?");
$stmt->execute([20, 2]);

echo "Záznam byl upraven.";
?>
