<?php
// Cvičení 18.6 – Uložení tématu (dark/light)

setcookie("theme", "dark", time() + 86400);

echo "Téma 'dark' bylo uloženo.";
?>
