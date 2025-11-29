<?php
// Cvičení 9.13 – Mazání session

session_start();

session_unset(); 
session_destroy();

echo "Session byla smazána.";
?>
