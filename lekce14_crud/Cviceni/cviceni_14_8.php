<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->query("SELECT * FROM studenti ORDER BY jmeno ASC");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $s) {
    echo $s["jmeno"] . " " . $s["prijmeni"] . "<br>";
}
?>
