<?php
// Cvičení 5.10 – Vnořená podmínka

$vek = 18;
$student = true;

if ($vek >= 18) {
    if ($student) {
        echo "Dospělý student.";
    } else {
        echo "Dospělý.";
    }
} else {
    echo "Nezletilý.";
}
?>
