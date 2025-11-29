<?php
// Cvičení 18.3 – Cookie na 10 minut

setcookie("test", "ahoj", time() + 600);

echo "Cookie nastavena na 10 minut.";
?>
