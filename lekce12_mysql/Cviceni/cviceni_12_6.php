<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "DELETE FROM studenti WHERE id = 1";
mysqli_query($conn, $sql);

echo "Záznam smazán.";
?>
