# Lekce 17 – Sessions v PHP

## 🎯 Cíl lekce
Cílem lekce je pochopit, jak fungují **sessions (relace)** v PHP – mechanismus, díky kterému si server “pamatuje” uživatele mezi stránkami.  
Student se naučí:

- založit session (session_start),
- ukládat hodnoty do session,
- číst hodnoty ze session,
- mazat konkrétní hodnoty,
- úplně ukončit session,
- využít session pro jednoduché přihlášení.

---

# 🧠 Co je session?

- PHP session umožňuje **ukládat informace o uživateli na straně serveru**.
- Používá se pro:
  - přihlášení uživatele,
  - počítání návštěv,
  - uložení údajů mezi stránkami,
  - nákupní košíky.

Na klientovi je uložen pouze **session ID (PHPSESSID)** – většinou v cookie.

---

# 🔧 Jak session založit?

Na **každé stránce, kde chceme session používat**, musíme volat:

```php
session_start();
````

Musí být **vždy nahoře**, ještě před HTML!

---

# 📥 Uložení hodnot do session

```php
session_start();

$_SESSION["jmeno"] = "Kristýna";
$_SESSION["role"] = "student";
```

---

# 📤 Čtení hodnot ze session

```php
session_start();

echo $_SESSION["jmeno"];
```

---

# ❌ Smazání jedné položky

```php
unset($_SESSION["jmeno"]);
```

---

# 🔥 Úplné zrušení session

```php
session_start();
session_destroy();
```

> Tím se **smažou VŠECHNA** data uložená v session.

---

# 🔑 Jednoduché přihlášení pomocí session

**přihlaseni.php**

```php
session_start();

if ($_POST["heslo"] === "tajne") {
    $_SESSION["user"] = "student";
    echo "Přihlášeno!";
}
```

**stranka.php**

```php
session_start();

if (!isset($_SESSION["user"])) {
    echo "Nepřihlášen!";
    exit;
}

echo "Jsi přihlášen jako " . $_SESSION["user"];
```

---

# 🔄 Počítadlo návštěv

```php
session_start();

if (!isset($_SESSION["navstevy"])) {
    $_SESSION["navstevy"] = 1;
} else {
    $_SESSION["navstevy"]++;
}

echo "Navštívil jsi tuto stránku " . $_SESSION["navstevy"] . "×.";
```

---

# 🧹 Vymazání session + přesměrování

```php
session_start();
session_destroy();
header("Location: login.php");
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **17.1 – Založ session**

Vytvoř stránku, která uloží do session jméno uživatele.

### **17.2 – Čtení session**

Zobraz hodnotu uloženou v session.

### **17.3 – Počítadlo návštěv**

Čítač, který se při každém načtení zvýší.

### **17.4 – Smazání jedné položky**

Smaž hodnotu „jmeno“.

### **17.5 – Zrušení celé session**

Použij `session_destroy()`.

### **17.6 – Jednoduché přihlášení**

Formulář → uložit „user“ do session.

### **17.7 – Ochrana stránky**

Zobraz stránku pouze přihlášeným uživatelům.

### **17.8 – Logout**

Tlačítko pro odhlášení → session_destroy().

### **17.9 – Session jako košík**

Přidávej položky do pole uloženého v session.

### **17.10 – Mazání konkrétní položky košíku**

Použij `unset($_SESSION["kosik"][index])`.

### **17.11 – Jednoduchý admin panel**

Admin se přihlásí, role = „admin“.

### **17.12 – Uložení formuláře do session**

Ulož jméno + věk → přejdi na jinou stránku → vypiš je.

### **17.13 – Session timeout**

Ulož čas poslední aktivity.

### **17.14 – Započtení správných odpovědí**

Kvíz → odpovědi se uloží do session.

### **17.15 – Mini projekt**

Jednoduchý web:

* login,
* chráněná stránka,
* logout.



