<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->query("SELECT COUNT(*) AS pocet FROM studenti");
$r = $stmt->fetch(PDO::FETCH_ASSOC);

echo "Počet studentů: " . $r["pocet"];
?>
