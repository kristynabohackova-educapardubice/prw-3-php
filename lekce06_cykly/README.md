# Lekce 6 – Cykly v PHP

## 🎯 Cíl lekce
Cílem této lekce je naučit se pracovat s cykly v PHP – zejména `for`, `while` a `do…while`.  
Student se naučí opakovat kód, procházet pole, vytvářet tabulky a sestavit složitější výstup, který se několikrát opakuje.

---

## 🔄 Co je cyklus?
Cyklus umožňuje **opakovat určitý blok kódu vícekrát**, například:

- vypsat čísla 1–100,
- projít pole hodnot,
- vytvořit HTML tabulku,
- generovat prvky na stránce dynamicky.

PHP nabízí tři hlavní typy cyklů:

- `for`
- `while`
- `do…while`

---

## 🔢 Cyklus FOR

Nejpoužívanější typ cyklu – používá se, když víme, **kolikrát** se má kód opakovat.

Základní syntaxe:

```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
````

Popis:

* `$i = 0` → počáteční hodnota
* `$i < 5` → podmínka, dokud běží cyklus
* `$i++` → posun o +1 po každém průchodu

---

## 🔁 Odpočet pomocí FOR

```php
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}
```

---

## 🔁 Cyklus WHILE

Běží, dokud je **podmínka pravdivá**.

```php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
```

Pozor na nekonečné cykly!

---

## 🔁 Cyklus DO…WHILE

Kód uvnitř se provede **alespoň jednou**, i když podmínka není splněná.

```php
$i = 1;

do {
    echo $i;
    $i++;
} while ($i <= 5);
```

---

## 🧩 Procházení pole pomocí cyklu

Pole lze procházet jak pomocí `for`, tak `foreach`.

Ukázka s `for`:

```php
$barvy = ["červená", "modrá", "zelená"];

for ($i = 0; $i < count($barvy); $i++) {
    echo $barvy[$i] . "<br>";
}
```

Ukázka s `foreach`:

```php
foreach ($barvy as $barva) {
    echo $barva . "<br>";
}
```

---

## 🧱 Vnořené cykly

Cyklus může obsahovat další cyklus – používá se například pro tvorbu tabulek:

```php
for ($r = 1; $r <= 3; $r++) {
    for ($s = 1; $s <= 3; $s++) {
        echo "$r,$s ";
    }
    echo "<br>";
}
```

---

## 🧩 Cvičení

> Řešení se ukládá do složky `Cviceni/`.

### **6.1 – Výpis 1 až 10**

Vypiš čísla 1–10 pomocí cyklu `for`.

### **6.2 – Odpočet**

Vypiš čísla 10 až 1 pomocí cyklu.

### **6.3 – Násobky čísla 3**

Zobraz 10 násobků čísla 3.

### **6.4 – Výpis prvků pole**

Vytvoř pole 5 libovolných hodnot a vypiš je pomocí `for`.

### **6.5 – Součet prvků pole**

Sečti hodnoty v poli pomocí cyklu.

### **6.6 – While cyklus**

Pomocí `while` vypiš čísla 1–5.

### **6.7 – Do-while cyklus**

Vypiš 1–5 pomocí `do…while`.

### **6.8 – Sudá čísla**

Vypiš všechna sudá čísla 1–50.

### **6.9 – Prvky pole pomocí foreach**

Vytvoř pole a vypiš ho pomocí foreach.

### **6.10 – Největší číslo v poli**

Najdi největší hodnotu v poli pomocí cyklu.

### **6.11 – Délky slov**

Pole stringů → vypiš slovo a jeho délku.

### **6.12 – Indexy a hodnoty**

Foreach → vypiš „Index: Hodnota“.

### **6.13 – Vnořené cykly**

Vytvoř tabulku 5×5 s čísly od 1 do 25.

### **6.14 – Číselná pyramida**

Vytvoř pyramidu z čísel pomocí dvou cyklů.

### **6.15 – Kombinované cvičení**

Pole čísel → vypiš jen ta, která jsou větší než 10 a zároveň sudá.


