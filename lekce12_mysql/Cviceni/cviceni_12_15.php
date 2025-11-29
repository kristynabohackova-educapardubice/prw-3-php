<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT * FROM studenti ORDER BY jmeno ASC";
$vysledek = mysqli_query($conn, $sql);

while ($r = mysqli_fetch_assoc($vysledek)) {
    echo $r["jmeno"] . " " . $r["prijmeni"] . "<br>";
}
?>
