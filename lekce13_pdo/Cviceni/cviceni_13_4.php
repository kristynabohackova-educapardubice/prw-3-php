<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->prepare("INSERT INTO studenti (jmeno, prijmeni, vek) VALUES (?, ?, ?)");
$stmt->execute(["Petr", "Svoboda", 19]);

echo "Záznam vložen.";
?>
