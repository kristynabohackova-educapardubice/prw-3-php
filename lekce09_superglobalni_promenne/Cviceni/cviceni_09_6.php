<?php
// Cvičení 9.6 – Formulář POST + výpis $_POST

if (!empty($_POST)) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<form method="post">
    <input type="text" name="email" placeholder="Zadej email">
    <input type="text" name="heslo" placeholder="Zadej heslo">
    <button>Odeslat</button>
</form>
