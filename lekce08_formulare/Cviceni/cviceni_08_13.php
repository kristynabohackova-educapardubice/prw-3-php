<?php
// Cvičení 8.13 – Checkboxy

if (!empty($_POST["sporty"])) {
    echo "Vybrané sporty:<br>";
    foreach ($_POST["sporty"] as $sport) {
        echo "- " . htmlspecialchars($sport) . "<br>";
    }
}
?>

<form method="post">
    <label><input type="checkbox" name="sporty[]" value="fotbal"> Fotbal</label><br>
    <label><input type="checkbox" name="sporty[]" value="běh"> Běh</label><br>
    <label><input type="checkbox" name="sporty[]" value="plavání"> Plavání</label><br>
    <button>Odeslat</button>
</form>
