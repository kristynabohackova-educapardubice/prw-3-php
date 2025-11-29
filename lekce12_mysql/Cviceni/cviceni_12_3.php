<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT * FROM studenti WHERE id = 1";
$vysledek = mysqli_query($conn, $sql);

$radek = mysqli_fetch_assoc($vysledek);

echo $radek["jmeno"] . " " . $radek["prijmeni"];
?>
