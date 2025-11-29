<?php
// Cvičení 8.10 – Součet dvou čísel

if (isset($_POST["a"], $_POST["b"])) {
    if (is_numeric($_POST["a"]) && is_numeric($_POST["b"])) {
        echo "Součet: " . ($_POST["a"] + $_POST["b"]);
    } else {
        echo "Zadej dvě čísla!";
    }
}
?>

<form method="post">
    <input type="text" name="a" placeholder="Číslo 1">
    <input type="text" name="b" placeholder="Číslo 2">
    <button>Sečíst</button>
</form>
