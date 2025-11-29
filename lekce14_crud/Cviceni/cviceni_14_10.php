<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");
$data = $conn->query("SELECT * FROM studenti")->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1" cellpadding="5">
<?php foreach ($data as $s): ?>
<tr>
    <td><?= $s["jmeno"] ?></td>
    <td><?= $s["prijmeni"] ?></td>
    <td><?= $s["vek"] ?></td>
    <td>
        <form method="post">
            <input type="hidden" name="id" value="<?= $s["id"] ?>">
            <button>Smazat</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php
if (!empty($_POST["id"])) {
    $stmt = $conn->prepare("DELETE FROM studenti WHERE id=?");
    $stmt->execute([$_POST["id"]]);
    echo "Smazáno.";
}
?>
