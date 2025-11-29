<?php
session_start();

echo "Jméno: " . $_SESSION["udaje"]["jmeno"] . "<br>";
echo "Věk: " . $_SESSION["udaje"]["vek"] . "<br>";
?>
