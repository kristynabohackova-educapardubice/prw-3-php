<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

// INSERT
if (!empty($_POST)) {
    $stmt = $conn->prepare("INSERT INTO studenti (jmeno, prijmeni, vek) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["jmeno"], $_POST["prijmeni"], $_POST["vek"]]);
}

// SELECT
$students = $conn->query("SELECT * FROM studenti")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Přidat studenta</h2>
<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Přidat</button>
</form>

<h2>Seznam studentů</h2>
<table border="1" cellpadding="5">
<?php foreach ($students as $s): ?>
    <tr>
        <td><?= $s["jmeno"] ?></td>
        <td><?= $s["prijmeni"] ?></td>
        <td><?= $s["vek"] ?></td>
    </tr>
<?php endforeach; ?>
</table>
