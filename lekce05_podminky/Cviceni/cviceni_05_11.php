<?php
// Cvičení 5.11 – Přihlášení uživatele

$zadaneJmeno = "admin";
$zadaneHeslo = "1234";

$spravneJmeno = "admin";
$spravneHeslo = "1234";

if ($zadaneJmeno == $spravneJmeno && $zadaneHeslo == $spravneHeslo) {
    echo "Přihlášení úspěšné!";
} else {
    echo "Chybné jméno nebo heslo.";
}
?>
