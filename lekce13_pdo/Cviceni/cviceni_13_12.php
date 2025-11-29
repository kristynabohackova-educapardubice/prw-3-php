<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

if (!empty($_POST["id"])) {
    $stmt = $conn->prepare("DELETE FROM studenti WHERE id = ?");
    $stmt->execute([$_POST["id"]]);
    echo "Záznam smazán.";
}
?>

<form method="post">
    <input type="number" name="id" placeholder="ID ke smazání">
    <button>Smazat</button>
</form>
