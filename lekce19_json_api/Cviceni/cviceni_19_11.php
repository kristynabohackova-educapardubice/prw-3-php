<?php
// Cvičení 19.11 – Uložení dat z formuláře

if (!empty($_POST["text"])) {
    file_put_contents("data.json", json_encode(["obsah" => $_POST["text"]]));
    echo "Uloženo!";
}
?>

<form method="post">
    <textarea name="text"></textarea>
    <button>Uložit</button>
</form>
