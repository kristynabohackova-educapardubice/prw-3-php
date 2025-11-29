<?php
session_start();

$timeout = 15; // vteřin

if (isset($_SESSION["posledni"])) {
    if (time() - $_SESSION["posledni"] > $timeout) {
        session_destroy();
        echo "Session vypršela.";
        exit;
    }
}

$_SESSION["posledni"] = time();

echo "Session aktivní.";
?>
