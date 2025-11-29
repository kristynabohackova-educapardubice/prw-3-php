<?php
// Cvičení 16.11 – Interface + implementace

interface Ulozitelne {
    public function ulozit($data);
}

class JsonUloziste implements Ulozitelne {
    public function ulozit($data) {
        file_put_contents("data.json", json_encode($data));
    }
}

class SouborUloziste implements Ulozitelne {
    public function ulozit($data) {
        file_put_contents("data.txt", implode("\n", $data));
    }
}

$uloz1 = new JsonUloziste();
$uloz1->ulozit(["a" => 1, "b" => 2]);

$uloz2 = new SouborUloziste();
$uloz2->ulozit(["prvni", "druhy"]);
?>
