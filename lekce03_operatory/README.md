# Lekce 3 – Operátory v PHP

## 🎯 Cíl lekce
Naučit se pracovat s matematickými, logickými a porovnávacími operátory v PHP a pochopit, kdy a jak je správně používat.

---

## ➕ Matematické operátory

| Operátor | Význam        | Ukázka        |
|----------|---------------|----------------|
| +        | sčítání       | `$a + $b`      |
| -        | odčítání      | `$a - $b`      |
| *        | násobení      | `$a * $b`      |
| /        | dělení        | `$a / $b`      |
| %        | modulo        | `$a % $b`      |

Příklad:

```php
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a % $b; // 1
````

---

## 🔁 Přiřazovací operátory

| Operátor | Význam    | Příklad   |
| -------- | --------- | --------- |
| =        | přiřazení | `$a = 5`  |
| +=       | zvýšení o | `$a += 2` |
| -=       | snížení o | `$a -= 3` |
| *=       | násobení  | `$a *= 4` |
| /=       | dělení    | `$a /= 2` |

Ukázka:

```php
$x = 10;
$x += 5; // x = 15
```

---

## ⚖️ Porovnávací operátory

Používají se v podmínkách.

| Operátor | Význam             |
| -------- | ------------------ |
| ==       | rovno              |
| ===      | rovno + stejný typ |
| !=       | nerovno            |
| >        | větší než          |
| <        | menší než          |
| >=       | větší nebo rovno   |
| <=       | menší nebo rovno   |

Ukázka:

```php
$a = 5;
$b = "5";

var_dump($a == $b);  // true
var_dump($a === $b); // false – jiný typ
```

---

## 🔍 Logické operátory

Logické operátory se používají v podmínkách:

| Operátor | Význam       |   |           |
| -------- | ------------ | - | --------- |
| &&       | a (AND)      |   |           |
|          |              |   | nebo (OR) |
| !        | negace (NOT) |   |           |

Ukázka:

```php
$vek = 18;

if ($vek >= 18 && $vek <= 65) {
    echo "Dospělý";
}
```

---

## 🧮 Zkrácené vyhodnocování

PHP vyhodnocuje logické výrazy zleva doprava a často stačí vyhodnotit jen část.

Příklad:

```php
$heslo = "";

if ($heslo != "" && strlen($heslo) > 5) {
    // Druhá podmínka se vyhodnotí jen pokud první je true
}
```

---

## 🧩 Cvičení

> Student vypracuje do složky `Cviceni/`.

### **3.1 – Základní výpočty**

Spočítejte součet, rozdíl, součin a podíl dvou čísel.

### **3.2 – Modulo**

Zjistěte zbytek po dělení dvou čísel.

### **3.3 – Zvýšení hodnoty**

Použijte `$x += 10` a `$x -= 5`.

### **3.4 – Porovnání hodnot**

Porovnejte dvě proměnné pomocí `==` a `===`.

### **3.5 – Větší / menší**

Zkontrolujte, zda je číslo větší než jiné.

### **3.6 – AND operátor**

Zkontrolujte, zda je věk mezi 18 a 30.

### **3.7 – OR operátor**

Zkontrolujte, zda je číslo menší než 0 nebo větší než 100.

### **3.8 – Negace**

Použijte `!` pro ověření, že proměnná není prázdná.

### **3.9 – Kombinace operátorů**

Zkombinujte porovnání s logickým operátorem.

### **3.10 – Dělení se zbytkem**

Ověřte, zda je číslo sudé.

### **3.11 – Podmínka s typem**

Ověřte, zda proměnná obsahuje číslo typu `int`.

### **3.12 – Minimální věk**

Použijte porovnání pro věkovou hranici (např. 15+).

### **3.13 – Porovnání stringů**

Porovnejte dvě slova, zda jsou stejná.

### **3.14 – Změna hodnoty proměnné**

Zvětšete proměnnou pomocí `+=` a `*=`

### **3.15 – Komplexní výraz**

Vyhodnoťte složený podmínkový výraz s více operátory.



