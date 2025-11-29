# Lekce 11 – Práce se soubory v PHP

## 🎯 Cíl lekce
Naučit se číst, zapisovat, vytvářet a mazat soubory pomocí PHP. Student porozumí tomu, jak fungují souborové funkce jako `fopen()`, `fread()`, `fwrite()`, `file_put_contents()`, `file_get_contents()`, `unlink()` a práci s cestami.

---

# 📁 Práce se soubory v PHP

PHP umožňuje pracovat se soubory přímo v rámci skriptů.  
Běžné úkoly:

- načíst obsah souboru,
- zapsat data do souboru,
- vytvořit nebo přepsat soubor,
- připojit text na konec souboru,
- získat informace o existenci souboru,
- smazat soubor.

---

# 📄 Čtení ze souboru

## ⭐ `file_get_contents()`
Nejjednodušší způsob, jak načíst celý soubor najednou:

```php
$obsah = file_get_contents("data.txt");
echo $obsah;
````

---

## ⭐ `fopen()` + `fread()`

Dává víc možností:

```php
$soubor = fopen("data.txt", "r");
$obsah = fread($soubor, filesize("data.txt"));
fclose($soubor);

echo $obsah;
```

---

# ✍️ Zápis do souboru

## ⭐ Přepsání souboru

```php
file_put_contents("data.txt", "Nový obsah");
```

---

## ⭐ Přidání textu na konec

```php
file_put_contents("data.txt", "Další řádek\n", FILE_APPEND);
```

---

## ⭐ `fopen()` + `fwrite()`

```php
$soubor = fopen("data.txt", "w");
fwrite($soubor, "Nějaký text");
fclose($soubor);
```

Režimy:

| Režim  | Popis                                  |
| ------ | -------------------------------------- |
| `"r"`  | pouze čtení                            |
| `"w"`  | zápis (přepíše soubor)                 |
| `"a"`  | zápis na konec                         |
| `"r+"` | čtení + zápis                          |
| `"a+"` | čtení + zápis, zápis jde vždy na konec |

---

# 🗑️ Mazání souboru

```php
unlink("soubor.txt");
```

---

# 🔎 Informace o souboru

```php
if (file_exists("data.txt")) {
    echo "Soubor existuje!";
}
```

Další užitečné funkce:

```php
filesize("data.txt");
filemtime("data.txt");
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **11.1 – Načti soubor**

Načti obsah `data.txt` a vypiš ho.

### **11.2 – Zápis do souboru**

Zapiš do souboru text: „První řádek“.

### **11.3 – Přidání textu**

Přidej další řádek pomocí `FILE_APPEND`.

### **11.4 – Kontrola existence**

Zjisti, jestli existuje soubor `log.txt`.

### **11.5 – Mazání souboru**

Pokud existuje `test.txt`, smaž ho.

### **11.6 – Vytvoření souboru**

Vytvoř soubor `info.txt` a napiš do něj „Hello world“.

### **11.7 – Délka souboru**

Vypiš velikost souboru v bajtech.

### **11.8 – Datum poslední změny**

Použij `filemtime()`.

### **11.9 – Čtení pomocí fopen**

Otevři soubor pomocí `"r"` a vypiš obsah.

### **11.10 – Zápis pomocí fwrite**

Použij `fopen("w")` a zapiš libovolný text.

### **11.11 – Logování**

Vytvoř skript, který při každém načtení zapíše do souboru čas.

### **11.12 – Formulář + zápis**

Formulář → uložit text do souboru `uzivatele.txt`.

### **11.13 – Formulář + výpis**

Načti a zobraz soubor `uzivatele.txt`.

### **11.14 – Pole → soubor**

Pole stringů zapiš tak, že každý prvek bude na jednom řádku.

### **11.15 – Soubor → pole**

Načti soubor a načti každý řádek do pole pomocí `file()`.


