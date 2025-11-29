<?php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");

function vypisTabulku($conn, $tabulka) {
    $stmt = $conn->query("SELECT * FROM $tabulka");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1' cellpadding='5'>";
    foreach ($data as $radek) {
        echo "<tr>";
        foreach ($radek as $hodnota) {
            echo "<td>$hodnota</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

vypisTabulku($conn, "studenti");
?>
