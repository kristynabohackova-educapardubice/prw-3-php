
# Lekce 5 – Podmínky v PHP

## 🎯 Cíl lekce
Naučit se používat podmínky `if`, `else`, `elseif`, psát rozhodovací logiku, pracovat s vnořenými podmínkami a tvořit smysluplné větve programu.

---

## 🧠 Co je podmínka?

Podmínka umožňuje programu **rozhodnout se**, zda provede určitý blok kódu.

Základní struktura:

```php
if (podmínka) {
    // kód se provede, pokud je podmínka true
}
````

---

## 🔀 If – Else

Pokud podmínka není splněna, provede se část `else`.

```php
$vek = 18;

if ($vek >= 18) {
    echo "Dospělý";
} else {
    echo "Nezletilý";
}
```

---

## 🔁 Elseif (více možností)

```php
$znamka = 2;

if ($znamka == 1) {
    echo "Výborně";
} elseif ($znamka == 2) {
    echo "Chvalitebně";
} elseif ($znamka == 3) {
    echo "Dobře";
} else {
    echo "Jiný výsledek";
}
```

---

## 🧱 Vnořené podmínky

Podmínky mohou být vnořené do sebe:

```php
$vek = 20;
$student = true;

if ($vek >= 18) {
    if ($student) {
        echo "Dospělý student";
    } else {
        echo "Dospělý";
    }
}
```

---

## ⚠️ Porovnání vs. přiřazení

| Operátor | Význam                  |
| -------- | ----------------------- |
| `==`     | porovnání hodnot        |
| `===`    | porovnání hodnot i typu |
| `=`      | přiřazení hodnoty       |

❗ Častá chyba:

```php
if ($x = 5)  // špatně – přiřazení
```

Správně:

```php
if ($x == 5)
```

---

## 🔍 Logické operátory v podmínkách

Používají se často v kombinaci:

| Operátor | Význam       |
| -------- | ------------ |
| &&       | a (AND)      |
| ||       | nebo (OR)    |
| !        | negace (NOT) |

Ukázka:

```php
if ($vek >= 18 && $vek <= 65) {
    echo "Pracovní věk";
}
```

---

## 🧩 Cvičení

> Cvičení student řeší ve složce `Cviceni/`.

### **5.1 – Základní podmínka**

Je osoba starší než 18 let?

### **5.2 – IF–ELSE**

Zkontrolujte, zda je číslo kladné, záporné nebo nulové.

### **5.3 – Více podmínek**

Podle známky vypište slovní hodnocení.

### **5.4 – Typ hodnoty**

Zkontrolujte, zda je proměnná typu `string`.

### **5.5 – Minimální věk**

Je věk ≥ 15? Vypište informaci.

### **5.6 – Interval**

Je číslo v intervalu ⟨10; 20⟩?

### **5.7 – AND operátor**

Zkontrolujte, zda osoba splňuje dvě podmínky zároveň.

### **5.8 – OR operátor**

Je číslo menší než 5 **nebo** větší než 50?

### **5.9 – Negace**

Použijte `!` a zkontrolujte, zda proměnná není prázdná.

### **5.10 – Vnořená podmínka**

Dospělý + student → vypište kombinaci.

### **5.11 – Přihlášení uživatele**

Porovnejte jméno a heslo.

### **5.12 – Výběr slevy**

Pokud má zákazník členskou kartu a je starší 18 → sleva 20 %.

### **5.13 – Podmínka s typem**

Ověřte, zda číslo je skutečně `int`.

### **5.14 – Porovnání textu**

Porovnejte dva stringy podle obsahu.

### **5.15 – Komplexní rozhodnutí**

Vyhodnoťte věkovou kategorii:
do 12 → dítě,
13–17 → mladistvý,
18+ → dospělý.


