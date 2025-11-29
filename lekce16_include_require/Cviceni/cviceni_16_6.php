<?php
// Cvičení 16.6 – Interface + implementace

interface Logger {
    public function zapis($text);
}

class SouborLogger implements Logger {
    public function zapis($text) {
        file_put_contents("log.txt", $text . "\n", FILE_APPEND);
    }
}

class HtmlLogger implements Logger {
    public function zapis($text) {
        echo "<p>$text</p>";
    }
}

$log1 = new SouborLogger();
$log1->zapis("Uložen do souboru.");

$log2 = new HtmlLogger();
$log2->zapis("Vypsán v HTML.");
?>
