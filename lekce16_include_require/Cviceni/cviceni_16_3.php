<?php
// Cvičení 16.3 – Interface

interface Zvuk {
    public function zvuk();
}

class Pes implements Zvuk {
    public function zvuk() {
        echo "Haf!";
    }
}

class Kohout implements Zvuk {
    public function zvuk() {
        echo "Kikirikí!";
    }
}

$farm = [new Pes(), new Kohout()];

foreach ($farm as $z) {
    $z->zvuk();
    echo "<br>";
}
?>
