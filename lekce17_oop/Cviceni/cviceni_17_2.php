<?php
session_start();

echo "Jméno v session je: " . ($_SESSION["jmeno"] ?? "není uloženo");
?>
