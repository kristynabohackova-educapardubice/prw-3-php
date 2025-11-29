<?php
// Cvičení 6.13 – Vnořené cykly, tabulka 5×5

echo "<table border='1' cellpadding='5'>";

$cislo = 1;

for ($radek = 1; $radek <= 5; $radek++) {
    echo "<tr>";
    for ($sloupec = 1; $sloupec <= 5; $sloupec++) {
        echo "<td>$cislo</td>";
        $cislo++;
    }
    echo "</tr>";
}

echo "</table>";
?>
