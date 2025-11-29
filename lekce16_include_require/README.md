# Lekce 16 – Pokročilé objektové programování v PHP

## 🎯 Cíl lekce
Cílem této lekce je rozšířit znalosti OOP z předchozí lekce.  
Student se naučí:

- pracovat s dědičností podrobněji,
- používat `parent::`,
- vytvářet **abstraktní třídy**,
- používat **rozhraní (interface)**,
- statické vlastnosti a metody,
- pochopit princip polymorfismu.

---

# 🔁 Opakování základů
Z lekce 15 už známe:

- třída (class)
- objekt (new)
- vlastnosti
- metody
- konstruktor
- public / private
- dědičnost (extends)

V této lekci půjdeme do hloubky.

---

# 📌 `parent::` – volání metody rodiče

Pokud třída přepíše metodu rodiče, stále ji lze zavolat:

```php
class Zvire {
    public function zvuk() {
        echo "??";
    }
}

class Pes extends Zvire {
    public function zvuk() {
        parent::zvuk();
        echo " Haf!";
    }
}
````

---

# 🧬 Abstraktní třídy (abstract)

Abstraktní třída:

* nelze ji přímo vytvořit (nelze `new`)
* slouží jako základ pro ostatní třídy,
* může obsahovat **abstraktní metody** = metody BEZ těla.

```php
abstract class Tvar {
    abstract public function obsah();
}
```

Implementace:

```php
class Kruh extends Tvar {
    public function obsah() {
        return 3.14 * 5 * 5;
    }
}
```

---

# 🔌 Interface (rozhraní)

Interface definuje **co musí třída umět**, ale ne **jak to udělá**.

```php
interface Logger {
    public function zapis($text);
}
```

Implementace:

```php
class SouborLogger implements Logger {
    public function zapis($text) {
        file_put_contents("log.txt", $text, FILE_APPEND);
    }
}
```

---

# 🧱 Statické metody a vlastnosti

Statická metoda:

* nevyžaduje vytváření objektu,
* volání: `Trida::metoda()`.

```php
class Matika {
    public static function soucet($a, $b) {
        return $a + $b;
    }
}

echo Matika::soucet(3, 4);
```

Statická vlastnost:

```php
class Nastaveni {
    public static $verze = "1.0";
}

echo Nastaveni::$verze;
```

---

# 🌀 Polymorfismus

Různé třídy mohou mít metody se stejným názvem, ale jiným chováním.

```php
class Pes { public function zvuk() { echo "Haf"; } }
class Kocka { public function zvuk() { echo "Mňau"; } }

function udelejZvuk($zvire) {
    $zvire->zvuk();
}

udelejZvuk(new Pes());
udelejZvuk(new Kocka());
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`

### **16.1 – Dědičnost + parent::**

Třída `Vozidlo`, třída `Auto`, metoda `popis()` se super voláním.

### **16.2 – Abstraktní třída**

Abstraktní třída `Tvar` + třída `Obdelnik`.

### **16.3 – Interface**

Interface `Zvuk` + třídy `Pes`, `Kohout`.

### **16.4 – Statická metoda**

Třída `Matika` se statickou metodou `nasobeni()`.

### **16.5 – Statická vlastnost**

Třída `Aplikace` s verzí aplikace.

### **16.6 – Třída Logger**

Interface + 2 implementace:

* Souborový logger,
* Výpis do HTML.

### **16.7 – Konstruktor + dědičnost**

Rodič + potomek, předání parametrů do parent konstruktoru.

### **16.8 – Polymorfismus**

Funkce, která dostane objekt a zavolá metodu `start()`.

### **16.9 – Abstraktní metoda**

Abstraktní třída `Zamestnanec` + dvě implementace výpočtu platu.

### **16.10 – OOP validace**

Setter s validací v abstraktní třídě.

### **16.11 – Interface + třídy**

Interface `Ulozitelne` + implementace do JSON a do souboru.

### **16.12 – Statická továrna**

Třída, která vytváří jiné třídy podle parametru.

### **16.13 – Kolekce objektů**

Pole objektů s metodou pro jejich výpis.

### **16.14 – Kombinovaná třída**

Třída používající interface + dědičnost současně.

### **16.15 – Mini OOP projekt**

Navrhni malý model:

* třída `Produkt`,
* třída `Kosik`,
* přidání produktů,
* výpočet ceny.



