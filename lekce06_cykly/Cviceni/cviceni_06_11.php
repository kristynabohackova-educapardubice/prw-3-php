<?php
// Cvičení 6.11 – Slova a délky

$slova = ["PHP", "programování", "cyklus", "auto"];

foreach ($slova as $slovo) {
    echo $slovo . " (" . strlen($slovo) . " znaků)<br>";
}
?>
