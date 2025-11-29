# Lekce 8 – Formuláře (GET a POST) v PHP

## 🎯 Cíl lekce
Naučit se pracovat s HTML formuláři, získávat data pomocí metod `GET` a `POST`, zpracovat vstup uživatele a zobrazit výsledek v PHP.

---

## 🧠 Co je formulář?

Formulář je způsob, jak uživatel zadá data na webu – například:

- přihlášení,
- vyhledávání,
- registrace,
- odeslání zprávy.

Odesílá se na server pomocí:

- **GET** (data v URL)
- **POST** (data skrytá v těle požadavku)

---

## 🟦 Metoda GET

Data se zobrazí v adrese:

```

script.php?jmeno=Tomáš&vek=18

````

Ukázka formuláře:

```html
<form action="zpracuj.php" method="get">
    <input type="text" name="jmeno">
    <button type="submit">Odeslat</button>
</form>
````

Získání dat v PHP:

```php
$jmeno = $_GET["jmeno"];
echo "Ahoj, $jmeno!";
```

---

## 🟩 Metoda POST

Bezpečnější – data nejsou v URL.

Formulář:

```html
<form action="zpracuj.php" method="post">
    <input type="text" name="email">
    <button type="submit">Odeslat</button>
</form>
```

Získání dat:

```php
$email = $_POST["email"];
echo "Tvůj e-mail: $email";
```

---

## ❗ Validace vstupu

Před použitím je vhodné ověřit, zda byl vstup odeslaný:

```php
if (!empty($_POST["jmeno"])) {
    echo $_POST["jmeno"];
}
```

---

## 🔒 Bezpečnostní zásady

* Nepoužívat data uživatele přímo bez kontroly.
* U textu pro výpis – používat `htmlspecialchars()`:

```php
echo htmlspecialchars($_POST["zprava"]);
```

* U čísel – ověřit pomocí `is_numeric()`.

---

## 📤 Odesílání více polí

```html
<form method="post">
    <input type="text" name="jmeno">
    <input type="number" name="vek">
    <button>Odeslat</button>
</form>
```

```php
echo $_POST["jmeno"];
echo $_POST["vek"];
```

---

## 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **8.1 – Formulář GET**

Vytvoř formulář s jedním inputem `jmeno` a vypiš “Ahoj + jméno”.

### **8.2 – Formulář POST**

Formulář se dvěma inputy: jméno a věk.

### **8.3 – Kontrola prázdného vstupu**

Pokud je pole prázdné → vypiš “Vyplň pole!”

### **8.4 – Tři políčka**

Jméno, příjmení, město → vypiš větu.

### **8.5 – Kontrola čísla**

Věk musí být číslo (použij `is_numeric()`).

### **8.6 – Pohlaví (radio buttony)**

Odeslat vybrané pohlaví.

### **8.7 – Výběr z nabídky (select)**

Vyber oblíbený film → vypiš výběr.

### **8.8 – Textarea**

Zobraz text z textarea bezpečně (`htmlspecialchars`).

### **8.9 – Základní validace**

Pokud není vyplněno jméno → chyba.
Jinak → zobraz zprávu.

### **8.10 – Součet dvou čísel**

Dva inputy → po odeslání vypiš součet.

### **8.11 – Formulář s heslem**

Zobraz počet znaků hesla.

### **8.12 – Kontrola délky textu**

Text musí mít alespoň 5 znaků.

### **8.13 – Zaškrtávací políčka (checkbox)**

Vyber libovolné sporty a vypiš je.

### **8.14 – Převod textu**

Textarea → vypiš velkými písmeny.

### **8.15 – Kompletní mini formulář**

Jméno, e-mail, zpráva → validace + výpis.
