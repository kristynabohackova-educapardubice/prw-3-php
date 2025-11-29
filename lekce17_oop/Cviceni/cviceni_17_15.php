<?php
// login.php
session_start();

if (!empty($_POST["heslo"]) && $_POST["heslo"] === "1234") {
    $_SESSION["user"] = "Kristýna";
    header("Location: protected.php");
    exit;
}
?>

<form method="post">
    <input type="password" name="heslo" placeholder="Heslo">
    <button>Přihlásit</button>
</form>
