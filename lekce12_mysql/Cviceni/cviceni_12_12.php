<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

if (!empty($_POST)) {
    $j = $_POST["jmeno"];
    $p = $_POST["prijmeni"];
    $v = $_POST["vek"];

    $sql = "INSERT INTO studenti (jmeno, prijmeni, vek)
            VALUES ('$j', '$p', $v)";

    mysqli_query($conn, $sql);

    echo "Uloženo.";
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Uložit</button>
</form>
