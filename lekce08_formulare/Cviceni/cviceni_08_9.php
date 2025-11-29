<?php
// Cvičení 8.9 – Základní validace

if (isset($_POST["jmeno"])) {
    if (empty($_POST["jmeno"])) {
        echo "Vyplň jméno!";
    } else {
        echo "Zadal jsi: " . htmlspecialchars($_POST["jmeno"]);
    }
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <button>Odeslat</button>
</form>
