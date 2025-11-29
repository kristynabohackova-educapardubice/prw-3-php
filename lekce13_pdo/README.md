# Lekce 13 – PDO a Prepared Statements

## 🎯 Cíl lekce
Cílem této lekce je naučit se pracovat s databází pomocí **PDO (PHP Data Objects)** – moderní, bezpečné a univerzální technologie.  
Student se naučí:

- připojit se k databázi pomocí PDO,
- provádět dotazy pomocí prepared statements,
- bezpečně vkládat, upravovat a mazat data,
- načítat výsledky jako pole,
- správně ošetřovat chyby.

---

# 🔌 Co je PDO?

**PDO = univerzální rozhraní pro práci s databázemi v PHP.**

Výhody:

- podporuje mnoho databází (MySQL, SQLite, PostgreSQL…),
- bezpečnější než klasický MySQLi,
- podporuje **prepared statements** → ochrana proti SQL injection,
- jednotné metody → přenositelnost kódu.

---

# 🧠 Připojení k databázi pomocí PDO

```php
try {
    $conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Připojeno!";
} catch (PDOException $e) {
    echo "Chyba: " . $e->getMessage();
}
````

`try/catch` blok umožňuje zachycení chyb.

---

# 📥 SELECT – načtení dat

## 🔹 1) Přímý dotaz (bez parametrů)

```php
$sql = $conn->query("SELECT * FROM studenti");
$studenti = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($studenti as $radek) {
    echo $radek["jmeno"] . "<br>";
}
```

---

# 🔒 Prepared statements – bezpečný dotaz

## 🔹 SELECT s parametrem

```php
$stmt = $conn->prepare("SELECT * FROM studenti WHERE id = ?");
$stmt->execute([1]);

$student = $stmt->fetch(PDO::FETCH_ASSOC);

echo $student["jmeno"];
```

---

# ➕ INSERT – vložení dat (bezpečně)

```php
$stmt = $conn->prepare("INSERT INTO studenti (jmeno, prijmeni, vek)
                        VALUES (?, ?, ?)");
$stmt->execute(["Anna", "Nováková", 18]);

echo "Záznam vložen.";
```

---

# ✏️ UPDATE – úprava dat

```php
$stmt = $conn->prepare("UPDATE studenti SET vek = ? WHERE id = ?");
$stmt->execute([19, 3]);

echo "Záznam upraven.";
```

---

# ❌ DELETE – smazání dat

```php
$stmt = $conn->prepare("DELETE FROM studenti WHERE id = ?");
$stmt->execute([5]);

echo "Záznam smazán.";
```

---

# 👇 Výběr způsobu načtení výsledků

| Metoda             | Popis                   |
| ------------------ | ----------------------- |
| `PDO::FETCH_ASSOC` | pole s názvy sloupců    |
| `PDO::FETCH_NUM`   | pole s číselnými indexy |
| `PDO::FETCH_OBJ`   | objekt                  |
| `PDO::FETCH_BOTH`  | obojí                   |

Příklad:

```php
$stmt = $conn->query("SELECT * FROM studenti");
$data = $stmt->fetchAll(PDO::FETCH_OBJ);

echo $data[0]->jmeno;
```

---

# 🚨 Ošetřování chyb

```php
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
```

Pro debug:

```php
catch (PDOException $e) {
    echo "Chyba: " . $e->getMessage();
}
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **13.1 – Připojení k databázi pomocí PDO**

Vytvoř skript, který se připojí k MySQL.

### **13.2 – SELECT všech studentů**

Načti a vypiš záznamy pomocí `fetchAll()`.

### **13.3 – SELECT jednoho studenta**

Použij parametr v prepared statementu.

### **13.4 – INSERT**

Přidej nového studenta pomocí prepared statementu.

### **13.5 – UPDATE**

Změň věk studenta.

### **13.6 – DELETE**

Smaž studenta podle ID.

### **13.7 – Tabulka studentů**

Vypiš výsledky jako HTML `<table>`.

### **13.8 – Hledání pomocí LIKE**

Formulář → SELECT LIKE.

### **13.9 – Výpis jen jmen**

Použij prepared statement.

### **13.10 – Ošetření chyb**

Simuluj chybu a vypiš její popis.

### **13.11 – Vložení z formuláře**

Formulář → INSERT pomocí PDO.

### **13.12 – Smazání podle ID (formulář)**

Formulář → DELETE.

### **13.13 – Řazení výsledků**

Vyber studenty seřazené podle jména.

### **13.14 – FETCH_OBJ**

Načti výsledek jako objekt.

### **13.15 – Kombinovaný dotaz**

Vyber studenty starší než X let (X z formuláře).

