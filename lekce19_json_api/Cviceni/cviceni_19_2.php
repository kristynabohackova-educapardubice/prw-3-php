<?php
// Cvičení 19.2 – JSON → PHP pole

$json = '["Ahoj", "Hello", "Ciao"]';

$data = json_decode($json, true);

print_r($data);
?>
