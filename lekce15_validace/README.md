# Lekce 15 – Základy objektového programování (OOP) v PHP

## 🎯 Cíl lekce
Cílem této lekce je pochopit, co jsou **objekty**, **třídy**, **vlastnosti**, **metody** a jak s nimi pracovat v PHP.  
Student se naučí:

- vytvořit třídu,
- vytvořit objekt,
- používat vlastnosti a metody,
- pracovat s konstruktorům,
- pochopit zapouzdření (public / private),
- porozumět tomu, proč se OOP používá.

---

# 🧠 Co je OOP?

**OOP = Object Oriented Programming (Objektově orientované programování)**  
Jedná se o způsob, jak psát programy pomocí objektů, které mají:

- **vlastnosti (properties)** → informace, které objekt obsahuje  
- **metody (methods)** → funkce, které objekt umí provádět  

Program je tak přehlednější, znovupoužitelný a organizovaný.

---

# 🧱 Třída a objekt

## 🔹 Definice třídy

```php
class Auto {
    public $znacka;
    public $barva;

    public function pozdrav() {
        echo "Jsem auto!";
    }
}
````

## 🔹 Vytvoření objektu

```php
$mojeAuto = new Auto();
$mojeAuto->znacka = "Škoda";
$mojeAuto->barva = "modrá";

echo $mojeAuto->znacka; // Škoda
```

---

# 🔧 Metody

Metoda je funkce uvnitř třídy:

```php
class Osoba {
    public $jmeno;

    public function pozdrav() {
        echo "Ahoj, já jsem " . $this->jmeno;
    }
}
```

Použití:

```php
$o = new Osoba();
$o->jmeno = "Anna";
$o->pozdrav(); // Ahoj, já jsem Anna
```

---

# 🚀 Konstruktor

Konstruktor se automaticky spustí při vytvoření objektu.

```php
class Zviratko {
    public $typ;

    public function __construct($typ) {
        $this->typ = $typ;
    }
}

$kocka = new Zviratko("Kočka");
echo $kocka->typ;
```

---

# 🔒 Zapouzdření: public / private / protected

| Klíčové slovo | Přístup                         |
| ------------- | ------------------------------- |
| **public**    | dostupné odkudkoliv             |
| **private**   | dostupné pouze uvnitř třídy     |
| **protected** | dostupné uvnitř třídy a potomků |

Příklad:

```php
class Student {
    private $jmeno;

    public function nastavJmeno($jmeno) {
        $this->jmeno = $jmeno;
    }

    public function vratJmeno() {
        return $this->jmeno;
    }
}
```

---

# 🧬 Dědičnost

Jedna třída může **zdědit** vlastnosti a metody jiné třídy.

```php
class Zvire {
    public function zvuk() {
        echo "???";
    }
}

class Pes extends Zvire {
    public function zvuk() {
        echo "Haf!";
    }
}

$p = new Pes();
$p->zvuk(); // Haf!
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`

### **15.1 – Vytvoření třídy**

Vytvoř třídu `Osoba` se dvěma vlastnostmi.

### **15.2 – Vytvoření objektu**

Vytvoř objekt `Osoba` a nastav mu jména.

### **15.3 – Metoda v objektu**

Doplň metodu „pozdrav“.

### **15.4 – Konstruktor**

Přidej konstruktor, který nastaví vlastnosti.

### **15.5 – private vlastnost**

Nastav vlastnost jako private a vytvoř getter + setter.

### **15.6 – Třída Auto**

Vytvoř třídu `Auto` se 3 vlastnostmi a metodou `popis()`.

### **15.7 – Dědičnost**

Vytvoř třídu `Student` → `ITStudent`.

### **15.8 – Pole objektů**

Vytvoř pole 3 objektů a vypiš je.

### **15.9 – Třída Produkt**

Název, cena, metoda `sleva($procenta)`.

### **15.10 – Bankovní účet**

Vklad, výběr, zůstatek (private).

### **15.11 – Zvíře / Pes / Kočka**

Dědičnost + přepis metody `zvuk()`.

### **15.12 – Tovární metoda**

Statická metoda, která vytvoří objekt podle parametru.

### **15.13 – Validace ve setteru**

Setter odmítne prázdné jméno.

### **15.14 – Třída Kniha**

Konstruktor + metoda `info()`.

### **15.15 – Mini OOP aplikace**

Vytvoř třídu `Uzivatel` + třídu `SpravceUzivatelu`, která ukládá uživatele do pole.


