<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT * FROM studenti";
$vysledek = mysqli_query($conn, $sql);

while ($radek = mysqli_fetch_assoc($vysledek)) {
    echo $radek["jmeno"] . " " . $radek["prijmeni"] . " (" . $radek["vek"] . ")<br>";
}
?>
