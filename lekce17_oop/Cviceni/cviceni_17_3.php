<?php
session_start();

if (!isset($_SESSION["navstevy"])) {
    $_SESSION["navstevy"] = 1;
} else {
    $_SESSION["navstevy"]++;
}

echo "Navštívil jsi tuto stránku " . $_SESSION["navstevy"] . "×.";
?>
