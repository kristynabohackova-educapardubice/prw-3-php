<?php
// Cvičení 8.14 – Text velkými písmeny

if (!empty($_POST["text"])) {
    echo strtoupper(htmlspecialchars($_POST["text"]));
}
?>

<form method="post">
    <textarea name="text" placeholder="Napiš text..."></textarea>
    <button>Odeslat</button>
</form>
