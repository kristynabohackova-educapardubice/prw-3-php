<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

if (!empty($_GET["vek"])) {
    $stmt = $conn->prepare("SELECT * FROM studenti WHERE vek > ?");
    $stmt->execute([$_GET["vek"]]);

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $s) {
        echo $s["jmeno"] . " " . $s["prijmeni"] . " (" . $s["vek"] . ")<br>";
    }
}
?>

<form method="get">
    <input type="number" name="vek" placeholder="Věk">
    <button>Vyhledat</button>
</form>
