<?php
// Cvičení 18.9 – Uložení aktuální URL

$url = $_SERVER["REQUEST_URI"];
setcookie("posledni_stranka", $url, time() + 3600);

echo "Poslední stránka: " . ($_COOKIE["posledni_stranka"] ?? "není uložena");
?>
