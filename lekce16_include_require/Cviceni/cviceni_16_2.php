<?php
// Cvičení 16.2 – Abstraktní třída

abstract class Tvar {
    abstract public function obsah();
}

class Obdelnik extends Tvar {
    public $a;
    public $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function obsah() {
        return $this->a * $this->b;
    }
}

$o = new Obdelnik(5, 3);
echo $o->obsah();
?>
