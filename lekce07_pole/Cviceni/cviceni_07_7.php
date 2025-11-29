<?php
// Cvičení 7.7 – Ověření, jestli pole obsahuje prvek

$barvy = ["červená", "modrá", "zelená"];

if (in_array("modrá", $barvy)) {
    echo "Barva je v poli.";
} else {
    echo "Barva není v poli.";
}
?>
