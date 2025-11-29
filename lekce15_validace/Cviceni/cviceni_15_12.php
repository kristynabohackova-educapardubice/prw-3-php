<?php
// Cvičení 15.12 – Tovární metoda

class Uzivatel {
    public $jmeno;

    public static function vytvor($jmeno) {
        $u = new Uzivatel();
        $u->jmeno = $jmeno;
        return $u;
    }
}

$u = Uzivatel::vytvor("Ondra");
echo $u->jmeno;
?>
