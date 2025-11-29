<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT jmeno FROM studenti";
$vysledek = mysqli_query($conn, $sql);

while ($r = mysqli_fetch_assoc($vysledek)) {
    echo $r["jmeno"] . "<br>";
}
?>
