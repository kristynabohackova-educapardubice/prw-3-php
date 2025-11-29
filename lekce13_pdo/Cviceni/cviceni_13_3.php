<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->prepare("SELECT * FROM studenti WHERE id = ?");
$stmt->execute([1]);

$s = $stmt->fetch(PDO::FETCH_ASSOC);

echo $s["jmeno"] . " " . $s["prijmeni"];
?>
