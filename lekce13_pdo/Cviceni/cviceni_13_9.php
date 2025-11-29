<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->prepare("SELECT jmeno FROM studenti");
$stmt->execute();

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $s) {
    echo $s["jmeno"] . "<br>";
}
?>
