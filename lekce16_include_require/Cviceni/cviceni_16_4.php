<?php
// Cvičení 16.4 – Statická metoda

class Matika {
    public static function nasobeni($a, $b) {
        return $a * $b;
    }
}

echo Matika::nasobeni(6, 7);
?>
