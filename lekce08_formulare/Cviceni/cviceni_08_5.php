<?php
// Cvičení 8.5 – Kontrola čísla

if (isset($_POST["vek"])) {
    if (is_numeric($_POST["vek"])) {
        echo "Věk: " . htmlspecialchars($_POST["vek"]);
    } else {
        echo "Zadej prosím číslo!";
    }
}
?>

<form method="post">
    <input type="text" name="vek" placeholder="Zadej věk">
    <button>Odeslat</button>
</form>
