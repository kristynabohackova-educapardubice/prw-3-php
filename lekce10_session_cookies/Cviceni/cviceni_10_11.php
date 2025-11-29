<?php
// Cvičení 10.11 – Logout simulace

session_start();

session_unset();
session_destroy();

echo "Odhlášeno.";
?>
