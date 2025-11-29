# Lekce 10 – Session a Cookies

## 🎯 Cíl lekce
Cílem této lekce je pochopit rozdíl mezi **session** a **cookie**, umět s nimi pracovat v PHP, ukládat a číst hodnoty, nastavovat jejich životnost a správně je mazat.

---

# 🍪 Cookies

## 🧠 Co je cookie?
Cookie je **malý textový soubor uložený v prohlížeči uživatele**.

Použití:
- zapamatování uživatele,
- nákupní košík,
- uložení preferencí (jazyk, téma),
- informace mezi návštěvami webu.

---

## ➕ Jak vytvořit cookie?

```php
setcookie("uzivatel", "Kristýna", time() + 3600);
````

Parametry:

* název (`"uzivatel"`)
* hodnota (`"Kristýna"`)
* čas expirace (`time() + 3600` = 1 hodina)

---

## 📖 Jak přečíst cookie?

```php
echo $_COOKIE["uzivatel"];
```

---

## ❌ Jak smazat cookie?

```php
setcookie("uzivatel", "", time() - 3600);
```

---

# 🔐 Session

## 🧠 Co je session?

Session je **uložená na serveru** a umožňuje uchovávat data během návštěvy uživatele.

Používá se na:

* přihlášení uživatele
* košík e-shopu
* stav aplikace
* zapamatování údajů mezi stránkami

---

## 🚀 Jak začít session?

Session **musí být vždy spuštěna**:

```php
session_start();
```

---

## ➕ Zápis hodnoty do session

```php
$_SESSION["jmeno"] = "Kristýna";
```

---

## 📖 Čtení hodnoty ze session

```php
echo $_SESSION["jmeno"];
```

---

## ❌ Smazání session

```php
session_start();
session_unset();
session_destroy();
```

---

# 📊 Cookies vs Session – rozdíly

| Cookies                        | Session                         |
| ------------------------------ | ------------------------------- |
| ukládají se do prohlížeče      | ukládají se na server           |
| vhodné pro dlouhodobá data     | vhodné pro citlivá data         |
| může je měnit uživatel         | uživatel k nim nemá přístup     |
| omezená velikost (cca 4 KB)    | velikost je téměř neomezená     |
| posílají se v každém požadavku | dostupné jen po session_start() |

---

# 🧩 Cvičení

> Řešení patří do složky `Cviceni/`.

### **10.1 – Nastavení cookie**

Nastav cookie s názvem `jazyk` a hodnotou `cz`.

### **10.2 – Načtení cookie**

Vypiš hodnotu cookie `jazyk`.

### **10.3 – Smazání cookie**

Zruš cookie pomocí `setcookie()`.

### **10.4 – Cookie s expirací**

Vytvoř cookie, která vyprší za 10 minut.

### **10.5 – Session start**

Spusť session a vypiš text „Session běží“.

### **10.6 – Session – zápis hodnoty**

Ulož do session hodnotu `barva = modrá`.

### **10.7 – Session – čtení**

Vypiš hodnotu `barva` ze session.

### **10.8 – Session – ověření existence**

Zjisti, zda existuje `$_SESSION["user"]`.

### **10.9 – Session – mazání**

Smaž celou session.

### **10.10 – Login simulace**

Formulář → uložit jméno do session.

### **10.11 – Logout simulace**

Smazat session + vypis „Odhlášeno“.

### **10.12 – Cookie + formulář**

Z formuláře uložit do cookie oblíbenou barvu.

### **10.13 – Přivítání**

Pokud existuje cookie `uživatel`, vypiš pozdrav.

### **10.14 – Počet návštěv**

V cookie počítat počet načtení stránky.

### **10.15 – Session + podmínka**

Pokud je v session `role = admin` → vypiš „Vítejte, administrátore“.



