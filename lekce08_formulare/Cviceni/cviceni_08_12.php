<?php
// Cvičení 8.12 – Minimální délka textu

if (isset($_POST["text"])) {
    if (strlen($_POST["text"]) < 5) {
        echo "Text musí mít alespoň 5 znaků!";
    } else {
        echo "Text je v pořádku.";
    }
}
?>

<form method="post">
    <input type="text" name="text" placeholder="Napiš něco...">
    <button>Odeslat</button>
</form>
