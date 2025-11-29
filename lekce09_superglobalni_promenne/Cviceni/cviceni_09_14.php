<?php
// Cvičení 9.14 – Upload souboru – název

if (!empty($_FILES)) {
    echo "Název nahraného souboru: " . $_FILES["soubor"]["name"];
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="soubor">
    <button>Odeslat</button>
</form>
