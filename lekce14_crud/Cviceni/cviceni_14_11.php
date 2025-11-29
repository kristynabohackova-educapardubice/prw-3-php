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
    <td><a href="cviceni_14_4.php?id=<?= $s['id'] ?>">Upravit</a></td>
</tr>
<?php endforeach; ?>
</table>
