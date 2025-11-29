<?php
// Cvičení 18.14 – Smazat všechny cookies

foreach ($_COOKIE as $nazev => $hodnota) {
    setcookie($nazev, "", time() - 3600);
}

echo "Všechny cookies byly smazány.";
?>
