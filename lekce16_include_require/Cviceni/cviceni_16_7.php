<?php
// Cvičení 16.7 – Konstruktor + parent::

// Rodič
class Clovek {
    public $jmeno;

    public function __construct($jmeno) {
        $this->jmeno = $jmeno;
    }
}

// Potomek
class Student extends Clovek {
    public $rocnik;

    public function __construct($jmeno, $rocnik) {
        parent::__construct($jmeno);
        $this->rocnik = $rocnik;
    }
}

$s = new Student("Marie", 3);
echo $s->jmeno . " – " . $s->rocnik . ". ročník";
?>
