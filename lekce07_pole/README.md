# Lekce 7 – Pole v PHP

## 🎯 Cíl lekce
Naučit se pracovat s poli v PHP – vytvářet je, upravovat, procházet jejich obsah a pracovat s vestavěnými funkcemi jako `count()`, `array_push()`, `array_pop()` nebo `in_array()`.

---

## 🧠 Co je pole?
**Pole (array)** je proměnná, která může uchovávat více hodnot najednou.

Například:

```php
$ovoce = ["jablko", "banán", "hruška"];
````

Indexy pole začínají od **0**.

`$ovoce[0]` → jablko
`$ovoce[1]` → banán

---

## 🟦 Indexovaná pole

Pole, kde jsou hodnoty uloženy pod číselnými indexy:

```php
$barvy = ["červená", "modrá", "zelená"];

echo $barvy[1]; // modrá
```

---

## 🟩 Asociativní pole

Pole, kde si hodnoty pojmenujete pomocí klíčů:

```php
$osoba = [
    "jmeno" => "Kristýna",
    "vek" => 20,
    "mesto" => "Brno"
];

echo $osoba["mesto"]; // Brno
```

---

## 🧱 Vícedimenzionální pole

Pole může obsahovat další pole:

```php
$studenti = [
    ["Anna", 17],
    ["Tomáš", 18]
];

echo $studenti[1][0]; // Tomáš
```

---

## ➕ Přidání hodnot

### Pomocí hranatých závorek:

```php
$seznam = ["A", "B"];
$seznam[] = "C";
```

### Pomocí `array_push()`:

```php
array_push($seznam, "D");
```

---

## ❌ Odebrání hodnot

```php
unset($seznam[1]); // smaže prvek s indexem 1
```

---

## 🔍 Zjištění počtu prvků

```php
$pocet = count($seznam);
```

---

## 🔁 Průchod pole pomocí FOREACH

Doporučený způsob pro čtení položek:

```php
foreach ($ovoce as $polozka) {
    echo $polozka . "<br>";
}
```

U asociativního pole:

```php
foreach ($osoba as $klic => $hodnota) {
    echo "$klic: $hodnota<br>";
}
```

---

## 🧰 Užitečné funkce pro práci s poli

| Funkce                  | Popis                            |
| ----------------------- | -------------------------------- |
| `count($pole)`          | počet prvků                      |
| `array_push($pole, $x)` | přidání prvku                    |
| `array_pop($pole)`      | odstranění posledního prvku      |
| `in_array($x, $pole)`   | ověření, zda pole obsahuje prvek |
| `array_keys($pole)`     | vrátí všechny klíče              |
| `array_values($pole)`   | vrátí všechny hodnoty            |

---

## 🧩 Cvičení

> Řešení patří do složky `Cviceni/`.

### **7.1 – Vytvoření pole**

Vytvoř pole tří oblíbených filmů a vypiš je.

### **7.2 – Druhý prvek**

Vypiš druhý prvek z pole.

### **7.3 – Přidání hodnoty**

Přidej nový prvek do existujícího pole.

### **7.4 – Asociativní pole**

Vytvoř asociativní pole o sobě.

### **7.5 – Foreach s klíči**

U asociativního pole vypiš klíč i hodnotu.

### **7.6 – Počet položek**

Vypiš počet hodnot v poli.

### **7.7 – Ověření hodnoty**

Použij `in_array()`.

### **7.8 – Odebrání prvku**

Smaž položku pomocí `unset()`.

### **7.9 – Projdi pole pomocí for**

Vypiš pole pomocí `for`.

### **7.10 – Vícedimenzionální pole**

Vytvoř pole studentů — jméno + věk.

### **7.11 – Přístup k vnořené hodnotě**

Vypiš jméno druhého studenta.

### **7.12 – array_push**

Přidej hodnotu na konec pole.

### **7.13 – array_pop**

Odstraň poslední hodnotu pole.

### **7.14 – Vypiš klíče**

Vypiš všechny klíče z asociativního pole.

### **7.15 – Vypiš hodnoty**

Vypiš všechny hodnoty (`array_values()`).



