# Lekce 19 – JSON, API a práce s daty v PHP

## 🎯 Cíl lekce
Cílem lekce je naučit se pracovat s formátem **JSON**, číst data z API a převádět data mezi PHP a JSON.
Student se naučí:

- co je JSON a kde se používá,
- převod z PHP pole → JSON (`json_encode()`),
- převod z JSON → PHP pole (`json_decode()`),
- načítání dat z externího API (`file_get_contents()`),
- ošetření chyb při načítání dat.

---

# 🧠 Co je JSON?

**JSON = JavaScript Object Notation**  
Je to textový formát sloužící k výměně dat mezi aplikacemi.

Příklad JSON objektu:

```json
{
    "jmeno": "Anna",
    "vek": 20,
    "student": true
}
````

Používá se všude:

* komunikace mezi weby a servery,
* REST API,
* ukládání dat (např. `data.json`),
* mobilní aplikace.

---

# 🔁 Převod PHP → JSON

```php
$data = [
    "jmeno" => "Petr",
    "vek" => 25
];

$json = json_encode($data);
echo $json;
```

Výstup:

```json
{"jmeno":"Petr","vek":25}
```

---

# 🔁 Převod JSON → PHP

```php
$json = '{"jmeno":"Petr","vek":25}';

$data = json_decode($json, true);

echo $data["jmeno"];
```

> `true` = dostaneme asociativní pole
> bez `true` bychom dostali objekt

---

# 📂 Uložení dat do JSON souboru

```php
$data = ["nazev" => "Laptop", "cena" => 15000];
file_put_contents("produkt.json", json_encode($data));
```

---

# 📂 Načtení dat ze souboru JSON

```php
$json = file_get_contents("produkt.json");
$data = json_decode($json, true);

echo $data["nazev"];
```

---

# 🌍 Načtení dat z API

Mnoho webů poskytuje veřejná API.
Jednoduché načtení:

```php
$url = "https://api.exchangerate.host/latest";

$json = file_get_contents($url);
$data = json_decode($json, true);

echo $data["base"]; // EUR
```

---

# ⚠️ Ošetření chyb API

API může být nedostupné → musíme kontrolovat:

```php
$json = @file_get_contents($url);

if ($json === false) {
    echo "API není dostupné.";
    exit;
}
```

---

# 🧪 Příklad: Kurzovní lístek

```php
$url = "https://api.exchangerate.host/latest?base=EUR";
$data = json_decode(file_get_contents($url), true);

echo "1 EUR = " . $data["rates"]["CZK"] . " Kč";
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **19.1 – PHP pole → JSON**

Převeď pole s 5 hodnotami na JSON.

### **19.2 – JSON → PHP pole**

Dekóduj JSON a vypiš hodnoty.

### **19.3 – JSON soubor – uložení**

Ulož produkt do `produkt.json`.

### **19.4 – JSON soubor – načtení**

Načti `produkt.json` a vypiš cenu.

### **19.5 – Uložení seznamu studentů**

Pole 5 studentů → uložit do `studenti.json`.

### **19.6 – Načtení studentů**

Načti soubor a vypiš jména.

### **19.7 – Veřejné API – základní dotaz**

Načti API s počasím (např. `wttr.in`).

### **19.8 – Kurzovní API**

Zobraz kurz EUR → CZK.

### **19.9 – Ošetření chyby**

Pokud API nevrátí data → vypsat chybu.

### **19.10 – API + parametry**

Použij API s parametry v URL.

### **19.11 – JSON editor**

Ulož uživatelský vstup do JSON.

### **19.12 – JSON validace**

Zkontroluj, zda je JSON validní.

### **19.13 – Array → JSON → soubor → zpět**

Kompletní cyklus práce s daty.

### **19.14 – API – výpis více hodnot**

Vypsat 5 nejdůležitějších kurzů.

### **19.15 – Mini projekt**

Jednoduchý "Crypto Checker":

* API s cenou bitcoinu,
* zobraz aktuální hodnotu,
* ulož do JSON logu.



