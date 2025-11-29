<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

if (!empty($_GET["jmeno"])) {
    $j = $_GET["jmeno"];
    $sql = "SELECT * FROM studenti WHERE jmeno LIKE '%$j%'";
    $v = mysqli_query($conn, $sql);

    while ($r = mysqli_fetch_assoc($v)) {
        echo $r["jmeno"] . " " . $r["prijmeni"] . "<br>";
    }
}
?>

<form method="get">
    <input type="text" name="jmeno" placeholder="Zadej jméno">
    <button>Hledat</button>
</form>
