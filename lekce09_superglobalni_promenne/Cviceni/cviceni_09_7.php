<?php
// Cvičení 9.7 – Detekce metody požadavku

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
    echo "Formulář byl odeslán metodou GET.";
} else {
    echo "Formulář byl odeslán metodou POST.";
}
?>
