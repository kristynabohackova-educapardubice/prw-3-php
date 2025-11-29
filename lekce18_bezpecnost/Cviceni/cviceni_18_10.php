<?php
// Cvičení 18.10 – Reklama po X návštěvách

$pocet = ($_COOKIE["visit"] ?? 0) + 1;
setcookie("visit", $pocet, time() + 3600);

if ($pocet >= 3) {
    echo "Reklama: Kup si nové tričko!";
} else {
    echo "Ještě " . (3 - $pocet) . " návštěvy a zobrazí se reklama.";
}
?>
