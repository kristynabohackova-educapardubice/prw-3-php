<?php
session_start();

if (!isset($_SESSION["kosik"])) {
    $_SESSION["Kosik"] = [];
}

if (!empty($_POST["polozka"])) {
    $_SESSION["Kosik"][] = $_POST["polozka"];
}

echo "<h3>Košík:</h3>";
foreach ($_SESSION["Kosik"] as $p) {
    echo "- $p<br>";
}
?>

<form method="post">
    <input type="text" name="polozka" placeholder="Nová položka">
    <button>Přidat</button>
</form>
