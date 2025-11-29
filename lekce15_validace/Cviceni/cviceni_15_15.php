<?php
// Cvičení 15.15 – Mini OOP aplikace

class Uzivatel {
    public $jmeno;
    public $email;

    public function __construct($jmeno, $email) {
        $this->jmeno = $jmeno;
        $this->email = $email;
    }
}

class SpravceUzivatelu {
    private $uzivatele = [];

    public function pridej(Uzivatel $u) {
        $this->uzivatele[] = $u;
    }

    public function vypis() {
        foreach ($this->uzivatele as $u) {
            echo $u->jmeno . " – " . $u->email . "<br>";
        }
    }
}

// Ukázka použití:
$s = new SpravceUzivatelu();

$s->pridej(new Uzivatel("Anna", "anna@example.com"));
$s->pridej(new Uzivatel("Petr", "petr@example.com"));

$s->vypis();
?>
