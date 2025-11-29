<?php
// Cvičení 10.12 – Uložení oblíbené barvy do cookie

if (!empty($_POST["barva"])) {
    setcookie("obl_barva", $_POST["barva"], time() + 3600);
    echo "Oblíbená barva byla uložena.";
}
?>

<form method="post">
    <input type="text" name="barva" placeholder="Zadej barvu">
    <button>Uložit</button>
</form>
