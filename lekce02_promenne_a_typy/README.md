# Lekce 2 – Proměnné a datové typy v PHP

## 🎯 Cíl lekce
Seznámit se s proměnnými v PHP, pochopit základní datové typy a naučit se pracovat s textem, čísly a boolean hodnotami.

---

## 🧩 Co je proměnná?

Proměnná je místo v paměti, kde program ukládá hodnotu.  
V PHP **všechny proměnné začínají znakem `$`**.

Příklad:

```php
$jmeno = "Kristýna";
$vek = 18;
$student = true;
````

---

## 🧪 Datové typy v PHP

V PHP se používají tyto základní typy:

* **string** – text
* **int** – celé číslo
* **float** – desetinné číslo
* **bool** – `true` / `false`
* **null** – prázdná hodnota
* **array** – pole (budeme řešit později)

Ukázka:

```php
$text = "Ahoj";
$cislo = 42;
$cena = 19.99;
$aktivni = false;
$nic = null;
```

---

## ✂️ Řetězce (string)

V PHP lze zapsat text dvěma způsoby:

### **1) Dvojité uvozovky**

PHP uvnitř vyhodnocuje proměnné:

```php
$jmeno = "Kristýna";
echo "Ahoj, $jmeno";
```

### **2) Jednoduché uvozovky**

Proměnné se NEvyhodnotí:

```php
echo 'Ahoj, $jmeno';
```

---

## 🔗 Spojování textu

Text se spojuje pomocí operátoru **.** (tečka):

```php
$jmeno = "Kristýna";
echo "Ahoj " . $jmeno . "!";
```

---

## 📏 Délka textu

Funkce `strlen()` vrací počet znaků:

```php
$slovo = "programovani";
echo strlen($slovo); // vrátí 12
```

---

## 🧮 Jednoduché výpočty

PHP umí pracovat s čísly stejně jako kalkulačka:

```php
$a = 5;
$b = 3;

echo $a + $b;
echo $a * $b;
echo $a / $b;
```

---

## 🧩 Cvičení

> Cvičení jsou pro studenty a řešení bude ve složce `Cviceni/`.

### **2.1 – Základní proměnná**

Vytvořte proměnnou se svým jménem a vypište ji.

### **2.2 – Text a číslo**

Uložte cenu produktu a vypište:
„Cena produktu je X Kč.“

### **2.3 – Dvě proměnné**

Vypište jméno a příjmení v jedné větě.

### **2.4 – Datový typ**

Pomocí `var_dump()` zobrazte typ proměnné.

### **2.5 – Boolean hodnota**

Vytvořte proměnnou s hodnotou `true` a vypište ji.

### **2.6 – Změna hodnoty**

Třikrát změňte hodnotu proměnné `$vek`.

### **2.7 – Spojení textu**

Spojte “Ahoj, ” a své jméno pomocí tečky.

### **2.8 – Délka textu**

Změřte délku libovolného slova.

### **2.9 – Výpočet**

Sečtěte dvě čísla v proměnných.

### **2.10 – Přepsání proměnné**

Uložte číslo a poté text — zobrazte typ.

### **2.11 – Null hodnota**

Vytvořte proměnnou a nastavte ji na `null`.

### **2.12 – Číslo + text**

Spojte text „Výsledek je: “ a číslo.

### **2.13 – Uvozovky**

Porovnejte rozdíl mezi:

```php
echo "Ahoj $jmeno";
echo 'Ahoj $jmeno';
```

### **2.14 – Velká písmena**

Pomocí `strtoupper()` vypište text velkými písmeny.

### **2.15 – Věta o vás**

Použijte 3 proměnné: jméno, věk, město.
Vypište celou větu o sobě.


