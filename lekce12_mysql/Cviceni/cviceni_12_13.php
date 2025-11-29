<?php
$conn = mysqli_connect("localhost", "root", "", "skola");

if (!empty($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM studenti WHERE id = $id";
    mysqli_query($conn, $sql);
    echo "Záznam smazán.";
}
?>

<form method="post">
    <input type="number" name="id" placeholder="ID ke smazání">
    <button>Smazat</button>
</form>
