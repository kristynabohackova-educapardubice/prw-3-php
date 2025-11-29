<?php
// Cvičení 16.12 – Tovární metoda

class Tovarni {
    public static function vytvor($typ) {
        if ($typ === "pes") return new Pes();
        if ($typ === "kocka") return new Kocka();
        return null;
    }
}

class Pes { public function zvuk() { echo "Haf"; } }
class Kocka { public function zvuk() { echo "Mňau"; } }

$z = Tovarni::vytvor("pes");
$z->zvuk();
?>
