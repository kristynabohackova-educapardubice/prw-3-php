<?php
// Cvičení 18.13 – Cookie jako "zapamatovat přihlášení"

if (isset($_COOKIE["user"])) {
    echo "Vítej zpět, " . $_COOKIE["user"];
} else {
    setcookie("user", "Kristýna", time() + 3600);
    echo "Nastavena cookie user = Kristýna";
}
?>
