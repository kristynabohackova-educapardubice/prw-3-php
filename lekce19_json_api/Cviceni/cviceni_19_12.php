<?php
// Cvičení 19.12 – Kontrola JSON

$input = '{"jmeno":"Petr","vek":28}';

$data = json_decode($input, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Neplatný JSON!";
} else {
    echo "Validní JSON: ";
    print_r($data);
}
?>
