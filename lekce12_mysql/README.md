# Lekce 12 – Práce s databází (MySQL)

## 🎯 Cíl lekce
V této lekci se student naučí pracovat s databázemi v PHP pomocí rozhraní **MySQLi**.  
Cílem je porozumět tomu, jak:

- se připojit k databázi,
- poslat SQL dotaz,
- načíst výsledky z tabulky,
- vložit, upravit a smazat data,
- ošetřit chyby připojení.

---

# 🗄️ Co je MySQL?
MySQL je jeden z nejpoužívanějších relačních databázových systémů.  
Pracuje s tabulkami a umožňuje ukládat data do strukturovaných záznamů.

V PHP k MySQL přistupujeme přes:

- **MySQLi** (procedurální nebo objektové)
- **PDO** (budeme brát v lekci 13)

V této lekci pracujeme s **MySQLi**.

---

# 🔌 Připojení k databázi – MySQLi

## Varianta 1 – Procedurální styl

```php
$conn = mysqli_connect("localhost", "root", "", "skola");

if (!$conn) {
    die("Chyba připojení: " . mysqli_connect_error());
}

echo "Připojeno!";
````

---

## Varianta 2 – Objektový styl

```php
$conn = new mysqli("localhost", "root", "", "skola");

if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}
```

---

# 📥 SELECT – načtení dat

```php
$sql = "SELECT * FROM studenti";
$vysledek = mysqli_query($conn, $sql);

while ($radek = mysqli_fetch_assoc($vysledek)) {
    echo $radek["jmeno"] . " " . $radek["prijmeni"] . "<br>";
}
```

---

# ➕ INSERT – vložení dat

```php
$sql = "INSERT INTO studenti (jmeno, prijmeni, vek)
        VALUES ('Anna', 'Nováková', 17)";

if (mysqli_query($conn, $sql)) {
    echo "Záznam byl úspěšně vložen.";
}
```

---

# ✏️ UPDATE – úprava dat

```php
$sql = "UPDATE studenti SET vek = 18 WHERE id = 3";

mysqli_query($conn, $sql);
```

---

# ❌ DELETE – smazání dat

```php
$sql = "DELETE FROM studenti WHERE id = 5";

mysqli_query($conn, $sql);
```

---

# 🧹 Uzavření připojení

```php
mysqli_close($conn);
```

---

# 📊 Ukázková tabulka – studenti

Používáme nejjednodušší strukturu:

```sql
CREATE TABLE studenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jmeno VARCHAR(50),
    prijmeni VARCHAR(50),
    vek INT
);
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **12.1 – Připojení k databázi**

Vytvoř skript, který se připojí k MySQL pomocí MySQLi.

### **12.2 – SELECT všech studentů**

Načti a zobraz všechny záznamy z tabulky `studenti`.

### **12.3 – SELECT jednoho studenta**

Zobraz studenta s `id = 1`.

### **12.4 – INSERT**

Vlož nového studenta do databáze.

### **12.5 – UPDATE**

Uprav věk existujícího studenta.

### **12.6 – DELETE**

Smaž záznam vybraného studenta.

### **12.7 – Výpis tabulky v HTML**

Zobraz výsledky v `<table>`.

### **12.8 – Počet záznamů**

Zjisti počet studentů pomocí `mysqli_num_rows()`.

### **12.9 – Kontrola chyb**

Připojení → vypiš chybovou hlášku při neúspěchu.

### **12.10 – Výpis jen jmen**

Z databáze vypiš pouze sloupec `jmeno`.

### **12.11 – SELECT s podmínkou**

Vyber studenty, kteří mají věk > 17.

### **12.12 – Formulář + INSERT**

Formulář → přidání nového studenta.

### **12.13 – Formulář + DELETE**

Formulář → smazání studenta podle ID.

### **12.14 – Hledání podle jména**

Pomocí formuláře vyhledej studenta podle jména.

### **12.15 – SELECT řazení**

Seřaď studenty podle jména (ASC/DESC).


