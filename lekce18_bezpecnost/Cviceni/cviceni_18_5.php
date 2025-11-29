
<?php
// Cvičení 18.5 – Počítadlo pomocí cookie

if (!isset($_COOKIE["navstevy"])) {
    $pocet = 1;
} else {
    $pocet = $_COOKIE["navstevy"] + 1;
}

setcookie("navstevy", $pocet, time() + 3600);

echo "Tuto stránku jsi navštívil $pocet×.";
?>
