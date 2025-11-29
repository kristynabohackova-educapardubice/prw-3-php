<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$chyba = "";

if (!empty($_POST)) {
    if (empty($_POST["jmeno"]) || empty($_POST["prijmeni"]) || empty($_POST["vek"])) {
        $chyba = "Vyplň všechna pole!";
    } else {
        $stmt = $conn->prepare("INSERT INTO studenti (jmeno, prijmeni, vek) VALUES (?, ?, ?)");
        $stmt->execute([$_POST["jmeno"], $_POST["prijmeni"], $_POST["vek"]]);
        echo "Student uložen.";
    }
}
?>

<p style="color:red"><?= $chyba ?></p>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Uložit</button>
</form>
