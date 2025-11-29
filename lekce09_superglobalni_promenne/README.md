# Lekce 9 – Superglobální proměnné v PHP

## 🎯 Cíl lekce
Cílem této lekce je pochopit a umět používat nejdůležitější superglobální proměnné v PHP – speciální vestavěná pole, která jsou přístupná vždy a všude. Studenti se naučí, jak číst data z formulářů, jak pracovat s informacemi o serveru, URL a prostředí.

---

## 🧠 Co jsou superglobální proměnné?

**Superglobální proměnné** jsou speciální pole v PHP, která jsou dostupná v každé části kódu – funkci, souboru i třídě.

Začínají vždy znakem **$_NĚCO**.

Mezi nejdůležitější patří:

- `$_GET`
- `$_POST`
- `$_REQUEST`
- `$_SERVER`
- `$_COOKIE`
- `$_SESSION`
- `$_FILES`

---

## 🌐 $_GET

Slouží k získávání dat odeslaných metodou **GET**, tedy přes URL.

Příklad URL:

```

[http://localhost/skript.php?jmeno=Anna&vek=17](http://localhost/skript.php?jmeno=Anna&vek=17)

````

Získání hodnot:

```php
echo $_GET["jmeno"];
echo $_GET["vek"];
````

---

## 📩 $_POST

Používané u formulářů s metodou **POST** (bezpečnější než GET).

```php
echo $_POST["email"];
```

---

## 📨 $_REQUEST

Obsahuje **GET + POST + COOKIE**.

Nedoporučuje se používat kvůli nižší bezpečnosti.

---

## 💻 $_SERVER

Obsahuje informace o:

* serveru,
* prohlížeči,
* metodě požadavku,
* cestě ke skriptu.

Nejčastější použití:

```php
echo $_SERVER["REQUEST_METHOD"];   // GET nebo POST
echo $_SERVER["PHP_SELF"];        // adresa samotného skriptu
echo $_SERVER["HTTP_USER_AGENT"]; // informace o prohlížeči
```

---

## 🍪 $_COOKIE

Umožňuje číst hodnoty uložené v cookie:

```php
echo $_COOKIE["uzivatel"];
```

Vytvoření cookie:

```php
setcookie("uzivatel", "Kristýna", time() + 3600);
```

---

## 🔐 $_SESSION

Slouží k ukládání dat mezi stránkami (stav přihlášení, košík, atd.).

Použití:

```php
session_start();
$_SESSION["jmeno"] = "Kristýna";

echo $_SESSION["jmeno"];
```

---

## 📁 $_FILES

Používá se při uploadu souborů.

```php
$_FILES["soubor"]["name"];
$_FILES["soubor"]["size"];
```

---

## 🧩 Příklady běžného použití

### Zjištění metody požadavku:

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Formulář byl odeslán metodou POST.";
}
```

### Obsah proměnné GET:

```php
print_r($_GET);
```

---

## 🧩 Cvičení

> Řešení patří do složky `Cviceni/`.

### **9.1 – Zobraz celé $_SERVER**

Pomocí `print_r()` vypiš celé pole `$_SERVER`.

### **9.2 – IP adresa uživatele**

Vypiš hodnotu `$_SERVER["REMOTE_ADDR"]`.

### **9.3 – Název skriptu**

Vypiš hodnotu `$_SERVER["PHP_SELF"]`.

### **9.4 – Informace o prohlížeči**

Vypiš `$_SERVER["HTTP_USER_AGENT"]`.

### **9.5 – Zobraz obsah $_GET**

Vytvoř formulář GET a vypiš hodnoty.

### **9.6 – Zobraz obsah $_POST**

Formulář POST → vypiš hodnoty.

### **9.7 – Detekce metody požadavku**

Pokud je metoda GET → vypiš text.
Pokud POST → vypiš jiný text.

### **9.8 – $_REQUEST**

Vytvoř formulář a vypiš hodnoty pomocí `$_REQUEST`.

### **9.9 – Práce s $_COOKIE (čtení)**

Vypiš hodnotu cookie, pokud existuje.

### **9.10 – Práce s $_COOKIE (zápis)**

Vytvoř cookie se jménem uživatele.

### **9.11 – Session – zápis**

Ulož do session jméno uživatele.

### **9.12 – Session – čtení**

Vypiš hodnotu uloženou v session.

### **9.13 – Session – mazání**

Smaž session pomocí `session_unset()` a `session_destroy()`.

### **9.14 – $_FILES – název souboru**

Vytvoř upload formulář → vypiš název nahraného souboru.

### **9.15 – $_FILES – velikost souboru**

Zobraz velikost nahraného souboru.




