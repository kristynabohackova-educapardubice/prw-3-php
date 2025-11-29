<?php
// Cvičení 18.12 – Uložení výběru jazyka

if (!empty($_GET["jazyk"])) {
    setcookie("jazyk", $_GET["jazyk"], time() + 86400);
}

$jazyk = $_COOKIE["jazyk"] ?? "cs";

echo "Vybraný jazyk: $jazyk";
?>

<br><br>

<a href="?jazyk=cs">Česky</a> | 
<a href="?jazyk=en">English</a>
