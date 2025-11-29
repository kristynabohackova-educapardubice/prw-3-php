<?php
// Cvičení 8.3 – Kontrola prázdného vstupu

if (isset($_POST["text"])) {
    if (empty($_POST["text"])) {
        echo "Vyplň pole!";
    } else {
        echo "Zadal jsi: " . htmlspecialchars($_POST["text"]);
    }
}
?>

<form method="post">
    <input type="text" name="text" placeholder="Napiš něco...">
    <button>Odeslat</button>
</form>
