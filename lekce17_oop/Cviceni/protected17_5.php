<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "Nepřístupné – přihlas se!";
    exit;
}

echo "Vítej, " . $_SESSION["user"] . "!";
?>

<a href="logout.php">Odhlásit</a>
