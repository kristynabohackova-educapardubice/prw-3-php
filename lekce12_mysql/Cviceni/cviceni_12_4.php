<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "INSERT INTO studenti (jmeno, prijmeni, vek)
        VALUES ('Anna', 'Nováková', 17)";

if (mysqli_query($conn, $sql)) {
    echo "Záznam vložen.";
}
?>
