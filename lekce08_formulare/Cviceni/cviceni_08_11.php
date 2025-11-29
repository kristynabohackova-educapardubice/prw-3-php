<?php
// Cvičení 8.11 – Heslo a počet znaků

if (!empty($_POST["heslo"])) {
    $heslo = $_POST["heslo"];
    echo "Heslo má " . strlen($heslo) . " znaků.";
}
?>

<form method="post">
    <input type="password" name="heslo" placeholder="Zadej heslo">
    <button>Odeslat</button>
</form>
