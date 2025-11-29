<?php
// Cvičení 18.15 – Mini projekt

// Uložení voleb
if (!empty($_POST["jmeno"])) {
    setcookie("jmeno", $_POST["jmeno"], time() + 86400);
}
if (!empty($_POST["tema"])) {
    setcookie("tema", $_POST["tema"], time() + 86400);
}
if (!empty($_POST["jazyk"])) {
    setcookie("jazyk", $_POST["jazyk"], time() + 86400);
}

// Načtení hodnot
$jmeno = $_COOKIE["jmeno"] ?? "host";
$tema  = $_COOKIE["tema"]  ?? "light";
$jazyk = $_COOKIE["jazyk"] ?? "cs";

$bg = $tema === "dark" ? "black" : "white";
$color = $tema === "dark" ? "white" : "black";
?>

<body style="background:<?= $bg ?>; color:<?= $color ?>;">
<h2>Nastavení uživatele</h2>

<p>Jméno: <?= $jmeno ?></p>
<p>Jazyk: <?= $jazyk ?></p>
<p>Téma: <?= $tema ?></p>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <select name="jazyk">
        <option value="cs">Česky</option>
        <option value="en">English</option>
    </select>
    <select name="tema">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <button>Uložit</button>
</form>
</body>
