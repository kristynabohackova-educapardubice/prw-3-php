<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

if (!empty($_POST)) {
    $stmt = $conn->prepare("INSERT INTO studenti (jmeno, prijmeni, vek) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["jmeno"], $_POST["prijmeni"], $_POST["vek"]]);
    echo "Student uložen.";
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Uložit</button>
</form>
