<?php
// Cvičení 9.5 – Formulář GET + výpis $_GET

if (!empty($_GET)) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>

<form method="get">
    <input type="text" name="jmeno" placeholder="Zadej jméno">
    <input type="number" name="vek" placeholder="Zadej věk">
    <button>Odeslat</button>
</form>
