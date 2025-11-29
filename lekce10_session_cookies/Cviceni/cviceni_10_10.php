<?php
// Cvičení 10.10 – Login simulace

session_start();

if (!empty($_POST["jmeno"])) {
    $_SESSION["jmeno"] = $_POST["jmeno"];
    echo "Přihlášeno jako: " . $_SESSION["jmeno"];
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Zadej jméno">
    <button>Login</button>
</form>
