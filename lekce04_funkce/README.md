# Lekce 4 – Funkce v PHP

## 🎯 Cíl lekce
Naučit se definovat a používat funkce, předávat argumenty, vracet hodnoty a pochopit rozdíl mezi parametrem a argumentem.

---

## 🧠 Co je funkce?

Funkce je pojmenovaný blok kódu, který můžeme opakovaně volat.

Výhody:

- přehlednější kód  
- opakovaná použitelnost  
- jednodušší údržba  
- logické členění programu  

---

## 📝 Jak definovat funkci

V PHP se funkce zapisuje:

```php
function pozdrav() {
    echo "Ahoj!";
}
````

Volání funkce:

```php
pozdrav();
```

---

## 📥 Parametry (vstupy funkce)

Funkce může přijímat **parametry**:

```php
function pozdrav($jmeno) {
    echo "Ahoj, $jmeno!";
}

pozdrav("Kristýno");
```

---

## 📤 Návratová hodnota (return)

Pomocí `return` funkce **vrací hodnotu**, kterou můžeme dál použít.

```php
function secti($a, $b) {
    return $a + $b;
}

$vysledek = secti(5, 7);
echo $vysledek; // 12
```

---

## 📚 Funkce s více parametry

```php
function info($jmeno, $vek) {
    echo "$jmeno má $vek let.";
}

info("Tomáš", 18);
```

---

## 🧩 Předávání výchozí hodnoty parametru

Parametr může mít výchozí hodnotu:

```php
function pozdrav($jmeno = "host") {
    echo "Ahoj, $jmeno!";
}

pozdrav();       // Ahoj, host!
pozdrav("Eva");  // Ahoj, Eva!
```

---

## 🌀 Funkce může vrátit různý typ

```php
function cislo() {
    return 123;
}

function text() {
    return "Ahoj";
}
```

---

## 🧩 Cvičení

> Student vypracuje do složky `Cviceni/`.

### **4.1 – Jednoduchá funkce**

Vytvořte funkci, která vypíše „Ahoj světe!“.

### **4.2 – Funkce s parametrem**

Vytvořte funkci `pozdrav($jmeno)`.

### **4.3 – Sečtení dvou čísel**

Vytvořte funkci, která vrátí součet dvou čísel.

### **4.4 – Délka textu**

Funkce, která vrátí délku textu (`strlen()`).

### **4.5 – Věta o sobě**

Funkce s 3 parametry – jméno, věk, město.
Vrátí větu: „Jmenuji se X, je mi Y let a pocházím z Z.“

### **4.6 – Výchozí parametr**

Funkce `pozdrav($jmeno = "host")`.

### **4.7 – Kontrola čísla**

Funkce, která zjistí, jestli je číslo kladné.

### **4.8 – Sudé / liché**

Funkce vrátí, zda je číslo sudé.

### **4.9 – Minimální věk**

Funkce, která ověří, zda je uživatel starší než 15.

### **4.10 – Návrat textu**

Funkce, která vrátí text velkými písmeny.

### **4.11 – Součet tří čísel**

Vytvořte funkci se třemi čísly.

### **4.12 – Porovnání dvou čísel**

Funkce vrátí větší z čísel.

### **4.13 – Cena s DPH**

Funkce spočítá DPH 21 %.

### **4.14 – Opakování textu**

Funkce, která vrátí text opakovaný N-krát.

### **4.15 – Kombinovaná funkce**

Funkce přijme jméno a věk a vrátí jinou odpověď podle věku.

