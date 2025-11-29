<?php
// Cvičení 8.15 – Mini formulář (jméno, e-mail, zpráva)

if (!empty($_POST["jmeno"]) && !empty($_POST["email"]) && !empty($_POST["zprava"])) {
    echo "Jméno: " . htmlspecialchars($_POST["jmeno"]) . "<br>";
    echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
    echo "Zpráva: <br>" . nl2br(htmlspecialchars($_POST["zprava"]));
} else {
    if ($_POST) echo "Vyplň prosím všechna pole!";
}
?>

<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <textarea name="zprava" placeholder="Zpráva..." rows="5"></textarea><br>
    <button>Odeslat</button>
</form>
