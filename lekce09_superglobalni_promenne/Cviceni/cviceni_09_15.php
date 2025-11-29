<?php
// Cvičení 9.15 – Upload souboru – velikost

if (!empty($_FILES)) {
    echo "Velikost souboru: " . $_FILES["soubor"]["size"] . " B";
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="soubor">
    <button>Odeslat</button>
</form>
