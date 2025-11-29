<?php
// Cvičení 8.2 – Formulář POST

if (!empty($_POST["jmeno"]) && !empty($_POST["vek"])) {
    $jmeno = htmlspecialchars($_POST["jmeno"]);
    $vek = htmlspecialchars($_POST["vek"]);

    echo "$jmeno má $vek let.";
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="number" name="vek" placeholder="Věk">
    <button>Odeslat</button>
</form>
