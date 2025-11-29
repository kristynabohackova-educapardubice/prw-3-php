<?php
// Cvičení 4.13 – Cena s DPH 21 %

function cenaSDPH($cena) {
    return $cena * 1.21;
}

echo cenaSDPH(100); // 121
?>
