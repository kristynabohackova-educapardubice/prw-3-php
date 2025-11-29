<?php
// Cvičení 18.11 – Čas poslední návštěvy

if (isset($_COOKIE["last_visit"])) {
    echo "Poslední návštěva: " . $_COOKIE["last_visit"];
}

setcookie("last_visit", date("d.m.Y H:i:s"), time() + 86400);
?>
