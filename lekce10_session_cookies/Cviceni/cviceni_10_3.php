<?php
// Cvičení 10.3 – Smazání cookie

setcookie("jazyk", "", time() - 3600);

echo "Cookie 'jazyk' byla smazána.";
?>
