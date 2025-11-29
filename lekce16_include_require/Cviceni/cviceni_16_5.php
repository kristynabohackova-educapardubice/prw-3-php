<?php
// Cvičení 16.5 – Statická vlastnost

class Aplikace {
    public static $verze = "2.1.0";
}

echo "Verze aplikace: " . Aplikace::$verze;
?>
