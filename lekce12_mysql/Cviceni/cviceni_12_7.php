<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

$sql = "SELECT * FROM studenti";
$vysledek = mysqli_query($conn, $sql);

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Jméno</th><th>Příjmení</th><th>Věk</th></tr>";

while ($r = mysqli_fetch_assoc($vysledek)) {
    echo "<tr>
            <td>{$r['id']}</td>
            <td>{$r['jmeno']}</td>
            <td>{$r['prijmeni']}</td>
            <td>{$r['vek']}</td>
          </tr>";
}

echo "</table>";
?>
