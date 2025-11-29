<?php
// Cvičení 9.8 – Vypiš hodnoty pomocí $_REQUEST

if (!empty($_REQUEST)) {
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
}
?>

<form method="post">
    <input type="text" name="text" placeholder="Zadej text">
    <button>Odeslat</button>
</form>
