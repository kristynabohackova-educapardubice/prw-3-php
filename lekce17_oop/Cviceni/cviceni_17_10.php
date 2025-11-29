<?php
session_start();

if (!isset($_SESSION["Kosik"])) {
    $_SESSION["Kosik"] = [];
}

if (isset($_POST["smazat"])) {
    unset($_SESSION["Kosik"][$_POST["smazat"]]);
}

echo "<h3>Košík:</h3>";

foreach ($_SESSION["Kosik"] as $i => $p) {
    echo "- $p 
          <form method='post' style='display:inline'>
            <button name='smazat' value='$i'>Smazat</button>
          </form><br>";
}
?>
