<?php
// Cvičení 10.9 – Mazání session

session_start();

session_unset();
session_destroy();

echo "Session byla smazána.";
?>
