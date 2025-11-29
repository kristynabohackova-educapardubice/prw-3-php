<?php
session_start();

if (!empty($_POST)) {
    $_SESSION["udaje"] = [
        "jmeno" => $_POST["jmeno"],
        "vek" => $_POST["vek"]
    ];

    header("Location: vypis.php");
    exit;
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="number" name="vek" placeholder="Věk">
    <button>Odeslat</button>
</form>
