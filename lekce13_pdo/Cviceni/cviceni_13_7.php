<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

$stmt = $conn->query("SELECT * FROM studenti");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Jméno</th><th>Příjmení</th><th>Věk</th></tr>";

foreach ($data as $s) {
    echo "<tr>
            <td>{$s['id']}</td>
            <td>{$s['jmeno']}</td>
            <td>{$s['prijmeni']}</td>
            <td>{$s['vek']}</td>
          </tr>";
}

echo "</table>";
?>
