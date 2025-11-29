<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->query("SELECT * FROM studenti ORDER BY jmeno ASC");

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $s) {
    echo $s["jmeno"] . " " . $s["prijmeni"] . "<br>";
}
?>
