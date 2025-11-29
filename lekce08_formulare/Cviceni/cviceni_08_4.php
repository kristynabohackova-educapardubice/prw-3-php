<?php
// Cvičení 8.4 – Tři políčka

if (!empty($_POST["jmeno"]) && !empty($_POST["prijmeni"]) && !empty($_POST["mesto"])) {
    echo "Jmenuji se " . htmlspecialchars($_POST["jmeno"]) . " " . 
         htmlspecialchars($_POST["prijmeni"]) . 
         " a pocházím z " . htmlspecialchars($_POST["mesto"]) . ".";
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="text" name="mesto" placeholder="Město">
    <button>Odeslat</button>
</form>
