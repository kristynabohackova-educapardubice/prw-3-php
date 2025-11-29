<?php
// Cvičení 15.11 – Přepis metody

class Zvire {
    public function zvuk() {
        echo "???";
    }
}

class Pes extends Zvire {
    public function zvuk() {
        echo "Haf!";
    }
}

class Kocka extends Zvire {
    public function zvuk() {
        echo "Mňau!";
    }
}

$z1 = new Pes();
$z2 = new Kocka();

$z1->zvuk();
echo "<br>";
$z2->zvuk();
?>
