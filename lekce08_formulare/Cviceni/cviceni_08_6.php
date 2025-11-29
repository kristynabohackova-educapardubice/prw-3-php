<?php
// Cvičení 8.6 – Radio buttony

if (!empty($_POST["pohlavi"])) {
    echo "Vybral jsi: " . htmlspecialchars($_POST["pohlavi"]);
}
?>

<form method="post">
    <label><input type="radio" name="pohlavi" value="muž"> Muž</label><br>
    <label><input type="radio" name="pohlavi" value="žena"> Žena</label><br>
    <button>Odeslat</button>
</form>
