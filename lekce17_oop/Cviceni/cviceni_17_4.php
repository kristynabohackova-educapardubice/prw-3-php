<?php
session_start();

unset($_SESSION["jmeno"]);

echo "Položka 'jmeno' byla smazána.";
?>
