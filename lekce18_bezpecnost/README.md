# Lekce 18 – Cookies v PHP

## 🎯 Cíl lekce
Cílem této lekce je naučit se pracovat s **cookies** v PHP – malými soubory uloženými v prohlížeči.  
Student se naučí:

- vytvořit cookie (`setcookie()`),
- číst hodnoty cookie,
- nastavit dobu platnosti,
- mazat cookie,
- rozdíl mezi session a cookie,
- použít cookies k uložení uživatelských preferencí.

---

# 🍪 Co je cookie?

Cookie je **malý textový soubor**, který se ukládá v prohlížeči uživatele.  
Slouží ke krátkodobému i dlouhodobému ukládání informací.

Příklady použití:

- zapamatování přihlášení,
- zapamatování výběru jazyka,
- nákupní košíky bez session,
- počítadla návštěv,
- uložení barevného tématu (light/dark mode).

---

# 🔧 Jak vytvořit cookie?

```php
setcookie("nazev", "hodnota", time() + 3600);
````

* `"nazev"` – jméno cookie
* `"hodnota"` – data, která ukládáme
* `time() + 3600` – platnost 1 hodinu dopředu

> Cookie *musí být poslaná před HTML výstupem!* (před `<html>`).

---

# 📥 Čtení cookie

```php
echo $_COOKIE["nazev"];
```

Pokud cookie neexistuje:

```php
echo $_COOKIE["tema"] ?? "nenastaveno";
```

---

# ❌ Smazání cookie

Cookie smažeme tak, že jí nastavíme **čas do minulosti**:

```php
setcookie("nazev", "", time() - 3600);
```

---

# ⏳ Cookies vs. Sessions

| Vlastnost   | Cookie                   | Session                         |
| ----------- | ------------------------ | ------------------------------- |
| Uložení     | v prohlížeči uživatele   | na serveru                      |
| Bezpečnost  | nízká                    | vysoká                          |
| Doba trvání | dle expiration time      | do zavření prohlížeče / logoutu |
| Vhodné pro  | jazyk, téma, drobná data | přihlášení, role, košík         |

---

# 🏷️ Příklady použití

## 1️⃣ Uložení tématu webu (dark / light)

```php
setcookie("theme", "dark", time() + 86400);
```

---

## 2️⃣ Přivítání uživatele

```php
if (!isset($_COOKIE["navsteva"])) {
    setcookie("navsteva", "ano", time() + 3600);
    echo "Vítej na stránce poprvé!";
} else {
    echo "Vítej zpět!";
}
```

---

## 3️⃣ Uložení jména

```php
setcookie("jmeno", "Petr", time() + 7 * 24 * 60 * 60);
```

---

# 🧩 Cvičení

> Řešení ukládej do složky `Cviceni/`.

### **18.1 – Vytvoření cookie**

Vytvoř cookie se jménem uživatele.

### **18.2 – Zobrazení cookie**

Vypiš uložené jméno z cookie.

### **18.3 – Cookie s expirací**

Ulož cookie, která expiruje za 10 minut.

### **18.4 – Smazání cookie**

Smaž cookie pomocí `time() - 3600`.

### **18.5 – Počítadlo návštěv**

Využij cookie k počítání návštěv.

### **18.6 – Uložení tématu webu**

Ulož do cookie "dark" nebo "light".

### **18.7 – Automatické načtení tématu**

Pokud cookie existuje → změň barvu pozadí.

### **18.8 – Formulář + cookie**

Formulář → uložit jméno do cookie.

### **18.9 – Zapamatování poslední stránky**

Ulož aktuální URL do cookie.

### **18.10 – Reklama po X návštěvách**

Zobraz reklamu až po 3 návštěvách.

### **18.11 – Cookie + čas zobrazení**

Ulož čas poslední návštěvy.

### **18.12 – Uložení preferencí jazyka**

Česky / English.

### **18.13 – Automatické přihlášení (simulace)**

Ulož “user=ano” → automaticky pozdrav uživatele.

### **18.14 – Smazání všech cookies**

Smaž všechny cookies v cyklu.

### **18.15 – Mini projekt**

Web se zapamatováním:

* jména,
* jazyka,
* tématu.


