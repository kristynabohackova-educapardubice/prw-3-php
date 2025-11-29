<?php
session_start();

if (!empty($_POST["heslo"])) {
    if ($_POST["heslo"] === "tajne") {
        $_SESSION["user"] = "student";
        echo "Přihlášen!";
    } else {
        echo "Špatné heslo.";
    }
}
?>

<form method="post">
    <input type="password" name="heslo" placeholder="Zadej heslo">
    <button>Přihlásit</button>
</form>
