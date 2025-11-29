<?php
session_start();

if (!isset($_SESSION["spravne"])) {
    $_SESSION["spravne"] = 0;
}

if (!empty($_POST["odpoved"])) {
    if ($_POST["odpoved"] === "b") {
        $_SESSION["spravne"]++;
    }
}

echo "Správných odpovědí: " . $_SESSION["spravne"];
?>

<form method="post">
    <p>Kolik je 2+2?</p>
    <label><input type="radio" name="odpoved" value="a"> 3</label><br>
    <label><input type="radio" name="odpoved" value="b"> 4</label><br>
    <label><input type="radio" name="odpoved" value="c"> 5</label><br>
    <button>Odeslat</button>
</form>
