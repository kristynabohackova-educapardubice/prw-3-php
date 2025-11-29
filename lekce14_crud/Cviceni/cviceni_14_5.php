<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->prepare(
    "UPDATE studenti SET jmeno=?, prijmeni=?, vek=? WHERE id=?"
);
$stmt->execute([$_POST["jmeno"], $_POST["prijmeni"], $_POST["vek"], $_POST["id"]]);

echo "Student upraven.";
?>
