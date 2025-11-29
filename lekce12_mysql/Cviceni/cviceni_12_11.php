<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT * FROM studenti WHERE vek > 17";
$vysledek = mysqli_query($conn, $sql);

while ($r = mysqli_fetch_assoc($vysledek)) {
    echo $r["jmeno"] . " (" . $r["vek"] . ")<br>";
}
?>
