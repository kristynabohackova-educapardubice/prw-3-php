<?php
// Cvičení 18.7 – Načtení tématu webu

$theme = $_COOKIE["theme"] ?? "light";

if ($theme === "dark") {
    echo "<body style='background:black; color:white'>Dark mode</body>";
} else {
    echo "<body style='background:white; color:black'>Light mode</body>";
}
?>
