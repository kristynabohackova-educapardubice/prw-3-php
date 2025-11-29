<?php
// Cvičení 8.7 – Select

if (!empty($_POST["film"])) {
    echo "Vybraný film: " . htmlspecialchars($_POST["film"]);
}
?>

<form method="post">
    <select name="film">
        <option value="Avatar">Avatar</option>
        <option value="Matrix">Matrix</option>
        <option value="Inception">Inception</option>
    </select>
    <button>Odeslat</button>
</form>
