<?php
// Cvičení 8.8 – Textarea + htmlspecialchars

if (!empty($_POST["zprava"])) {
    echo nl2br(htmlspecialchars($_POST["zprava"]));
}
?>

<form method="post">
    <textarea name="zprava" placeholder="Napiš zprávu..." rows="5"></textarea>
    <button>Odeslat</button>
</form>
