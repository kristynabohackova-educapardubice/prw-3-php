<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

if (!$conn) {
    die("Nepodařilo se připojit: " . mysqli_connect_error());
}

echo "Připojení OK.";
?>
