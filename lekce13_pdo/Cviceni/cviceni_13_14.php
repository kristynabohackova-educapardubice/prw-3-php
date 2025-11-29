<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->query("SELECT * FROM studenti");
$data = $stmt->fetchAll(PDO::FETCH_OBJ);

echo $data[0]->jmeno . " " . $data[0]->prijmeni;
?>
