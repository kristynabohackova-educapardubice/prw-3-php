<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT * FROM studenti";
$vysledek = mysqli_query($conn, $sql);

echo "Počet studentů: " . mysqli_num_rows($vysledek);
?>
