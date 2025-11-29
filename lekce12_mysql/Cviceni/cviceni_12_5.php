<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "UPDATE studenti SET vek = 18 WHERE id = 1";
mysqli_query($conn, $sql);

echo "Záznam upraven.";
?>
