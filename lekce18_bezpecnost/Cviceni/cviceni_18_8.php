<?php
// Cvičení 18.8 – Formulář → cookie

if (!empty($_POST["jmeno"])) {
    setcookie("jmeno", $_POST["jmeno"], time() + 3600);
    echo "Jméno uloženo.";
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Zadej jméno">
    <button>Uložit</button>
</form>
