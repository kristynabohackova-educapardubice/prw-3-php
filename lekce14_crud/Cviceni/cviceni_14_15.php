<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

// INSERT
if (!empty($_POST)) {
    $stmt = $conn->prepare(
        "INSERT INTO studenti (jmeno, prijmeni, vek) VALUES (?, ?, ?)"
    );
    $stmt->execute([$_POST["jmeno"], $_POST["prijmeni"], $_POST["vek"]]);
}
?>

<h2>Přidat studenta</h2>
<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Přidat</button>
</form>

<h2>Seznam studentů</h2>
<?php
$stmt = $conn->query("SELECT * FROM studenti");
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $s) {
    echo $s["jmeno"] . " " . $s["prijmeni"] . " (" . $s["vek"] . ")<br>";
}
?>
