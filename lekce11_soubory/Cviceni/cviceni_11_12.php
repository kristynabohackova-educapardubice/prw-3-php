<?php
// Cvičení 11.12 – Formulář + uložení textu do uzivatele.txt

if (!empty($_POST["text"])) {
    file_put_contents("uzivatele.txt", $_POST["text"] . "\n", FILE_APPEND);
    echo "Uloženo.";
}
?>

<form method="post">
    <input type="text" name="text" placeholder="Zadej text">
    <button>Uložit</button>
</form>
