<?php
// Cvičení 6.10 – Největší číslo v poli

$cisla = [12, 4, 25, 9, 18];
$max = $cisla[0];

foreach ($cisla as $c) {
    if ($c > $max) {
        $max = $c;
    }
}

echo "Největší číslo: $max";
?>
