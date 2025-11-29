<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->query("SELECT * FROM studenti");
$studenti = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($studenti as $s) {
    echo $s["jmeno"] . " " . $s["prijmeni"] . "<br>";
}
?>
