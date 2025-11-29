# Lekce 14 – CRUD aplikace v PHP

## 🎯 Cíl lekce
Cílem této lekce je vytvořit jednoduchou CRUD aplikaci v PHP – tedy aplikaci, která umí:

- **C – Create** (vytvořit záznam),
- **R – Read** (číst záznamy z databáze),
- **U – Update** (upravit záznam),
- **D – Delete** (smazat záznam).

Student se naučí propojit PHP, MySQL a HTML formuláře do jedné funkční webové aplikace.

---

# 🧠 Co je CRUD?
CRUD je základní soubor operací pro práci s daty.  
Používá se v každé aplikaci, která pracuje s databází (e-shop, evidence žáků, blog…).

| Operace | SQL příkaz | Příklad |
|---------|-------------|---------|
| **Create** | INSERT | přidat studenta |
| **Read** | SELECT | zobrazit tabulku studentů |
| **Update** | UPDATE | změnit věk studenta |
| **Delete** | DELETE | smazat studenta |

---

# 🔌 Připojení k databázi
V lekcích používáme **PDO**, protože je bezpečnější a modernější.

```php
$conn = new PDO("mysql:host=localhost;dbname=skola;charset=utf8", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
````

---

# 📥 READ – načtení všech záznamů

```php
$stmt = $conn->query("SELECT * FROM studenti");
$studenti = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

Vypisujeme do HTML tabulky:

```php
echo "<table border='1'>";
foreach ($studenti as $s) {
    echo "<tr>
            <td>{$s['jmeno']}</td>
            <td>{$s['prijmeni']}</td>
            <td>{$s['vek']}</td>
          </tr>";
}
echo "</table>";
```

---

# ➕ CREATE – vložení nového studenta

```php
$stmt = $conn->prepare("INSERT INTO studenti (jmeno, prijmeni, vek) VALUES (?, ?, ?)");
$stmt->execute([$_POST["jmeno"], $_POST["prijmeni"], $_POST["vek"]]);
```

Formulář:

```html
<form method="post">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Přidat</button>
</form>
```

---

# ✏️ UPDATE – úprava existujícího záznamu

```php
$stmt = $conn->prepare("UPDATE studenti SET jmeno=?, prijmeni=?, vek=? WHERE id=?");
$stmt->execute([$jmeno, $prijmeni, $vek, $id]);
```

Formulář:

```html
<form method="post">
    <input type="hidden" name="id" value="1">
    <input type="text" name="jmeno" placeholder="Jméno">
    <input type="text" name="prijmeni" placeholder="Příjmení">
    <input type="number" name="vek" placeholder="Věk">
    <button>Upravit</button>
</form>
```

---

# ❌ DELETE – smazání záznamu

```php
$stmt = $conn->prepare("DELETE FROM studenti WHERE id=?");
$stmt->execute([$_POST["id"]]);
```

Formulář:

```html
<form method="post">
    <input type="number" name="id" placeholder="ID ke smazání">
    <button>Smazat</button>
</form>
```

---

# 🧱 Struktura jednoduché CRUD aplikace

Typicky se aplikace skládá ze tří částí:

```
index.php – výpis tabulky studentů (READ)
create.php – přidání studenta (CREATE)
edit.php – úprava studenta (UPDATE)
delete.php – smazání studenta (DELETE)
```

---

# 🧩 Cvičení

> Řešení patří do složky `Cviceni/`.

### **14.1 – Připojení PDO + tabulka studentů**

Načti všechny studenty a zobraz je v HTML tabulce.

### **14.2 – CREATE formulář**

Vytvoř formulář pro přidání studenta + INSERT.

### **14.3 – DELETE formulář**

Formulář → smaž studenta podle ID.

### **14.4 – UPDATE – načtení hodnoty**

Načti studenta pomocí ID a vlož jeho hodnoty do formuláře.

### **14.5 – UPDATE – odeslání změn**

Uprav studenta pomocí UPDATE.

### **14.6 – Kombinovaná stránka**

1. výpis tabulky
2. formulář pro vložení studenta
3. po odeslání znovu zobraz tabulku

### **14.7 – Validace formuláře**

Zkontroluj, zda nejsou pole prázdná.

### **14.8 – Řazení podle jména**

Vypsat studenty seřazené podle `jmeno ASC`.

### **14.9 – Hledání studentů**

Pomocí formuláře vyhledat studenta podle části jména.

### **14.10 – DELETE tlačítko u každého řádku**

Na každý řádek tabulky doplnit tlačítko „Smazat“.

### **14.11 – UPDATE link u každého řádku**

Ke každému řádku doplnit odkaz „Upravit“.

### **14.12 – Počítání studentů**

Zobraz počet studentů v tabulce.

### **14.13 – Filtrování podle věku**

Vypsat studenty starší než X let.

### **14.14 – Univerzální výpis**

Udělat funkci, která vybere data z libovolné tabulky.

### **14.15 – Mini aplikace**

Vytvoř mini CRUD aplikaci se 2 stránkami:

* výpis studentů
* přidání studenta


