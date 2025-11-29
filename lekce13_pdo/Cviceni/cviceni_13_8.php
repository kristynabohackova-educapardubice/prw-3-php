<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

if (!empty($_GET["jmeno"])) {
    $hledat = "%" . $_GET["jmeno"] . "%";
    $stmt = $conn->prepare("SELECT * FROM studenti WHERE jmeno LIKE ?");
    $stmt->execute([$hledat]);

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $s) {
        echo $s["jmeno"] . " " . $s["prijmeni"] . "<br>";
    }
}
?>

<form method="get">
    <input type="text" name="jmeno" placeholder="Zadej jméno">
    <button>Hledat</button>
</form>
