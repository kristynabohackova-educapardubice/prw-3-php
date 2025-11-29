<?php
// Cvičení 6.15 – Čísla větší než 10 a zároveň sudá

$cisla = [3, 12, 7, 18, 25, 30];

foreach ($cisla as $c) {
    if ($c > 10 && $c % 2 == 0) {
        echo $c . "<br>";
    }
}
?>
