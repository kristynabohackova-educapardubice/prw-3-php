<?php
// Cvičení 8.1 – Formulář GET

if (!empty($_GET["jmeno"])) {
    $jmeno = htmlspecialchars($_GET["jmeno"]);
    echo "Ahoj, $jmeno!";
}
?>

<form method="get">
    <input type="text" name="jmeno" placeholder="Zadej jméno">
    <button type="submit">Odeslat</button>
</form>
