<?php
// Cvičení 10.4 – Cookie s expirací 10 minut

setcookie("navsteva", "ano", time() + 600);

echo "Cookie 'navsteva' byla nastavena na 10 minut.";
?>
