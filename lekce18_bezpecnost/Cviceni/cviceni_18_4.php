<?php
// Cvičení 18.4 – Smazání cookie

setcookie("jmeno", "", time() - 3600);

echo "Cookie byla smazána.";
?>
