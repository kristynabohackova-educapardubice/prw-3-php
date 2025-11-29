# Lekce 1: Úvod do PHP

## 🎯 Cíl lekce
Vysvětlit, co je PHP, kde běží, jak se liší od JavaScriptu a jak vytvořit svůj první PHP skript.

---

## 💡 Co je PHP?

PHP je skriptovací jazyk, který běží na **serveru**.

Na rozdíl od JavaScriptu, který se provádí v prohlížeči:

- **JavaScript** = běží v prohlížeči (client-side)  
- **PHP** = běží na serveru (server-side)

PHP umožňuje:

- zpracovávat formuláře  
- pracovat se soubory  
- komunikovat s databází  
- generovat dynamické weby

---

## 🚀 Jak spustit PHP?

Pro spuštění PHP je potřeba lokální serverové prostředí:

- **XAMPP** (doporučeno pro výuku)  
- WAMP / MAMP  
- Integrovaný PHP server (příkazová řádka)

### 📁 Kde musí být uložen PHP soubor?
V kořenové složce serveru – například **htdocs** u XAMPPu.

---

## 📝 První PHP soubor

Vytvořte soubor `index.php` a vložte:

```php
<?php
echo "Ahoj světe!";
?>
````

Otevřete v prohlížeči na adrese:

```
http://localhost/index.php
```

---

## 💬 Komentáře v PHP

```php
// jednřádkový komentář

/*
  víceřádkový
  komentář
*/
```

---

## 🧪 Cvičení

### **Cvičení 1.1 – První výpis v PHP**

Upravte kód tak, aby vypsal:
**"Vítejte v kurzu PHP!"**

---

### **Cvičení 1.2 – HTML + PHP**

Vytvořte HTML stránku, kde PHP vypíše vaše jméno.

---

### **Cvičení 1.3 – Více příkazů echo**

Vypište tři různé věty pomocí funkce `echo`.



