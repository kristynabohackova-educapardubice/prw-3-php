<?php
// Cvičení 11.11 – Logování času načtení stránky

$cas = date("d.m.Y H:i:s");
file_put_contents("log.txt", "Načteno: $cas\n", FILE_APPEND);

echo "Zapsáno do logu.";
?>
