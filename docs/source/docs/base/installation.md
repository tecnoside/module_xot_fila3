---
title: Installazione
description: Come Installare la Base
extends: _layouts.documentation
section: content
---

# Installazione {#installation}

### Clonare la base in locale nella cartella del server, scaricando i submodules, e senza la storia delle modifiche

```bash
git clone https://NOME_BASE.git --recurse-submodules --depth=1
```

### dalla cartella "laravel" creare il file delle variabili d'ambiente .env 
    
```bash
cp .env.latest .env
```

- modificare parametri a seconda delle necessità
- dopo aver messo i nomi dei database, in phpmyadmin creare i database vuoti

### dalla cartella laravel, lanciare in bash il comando

```bash
../bashscripts/composer_init.sh
```

alternativa: 

```bash
composer update
cd Modules/Xot/Services
composer install
php artisan key:generate
```

### vedere la lista dei moduli con il comando

alternativa da terminale:

```bash
php artisan module:list 
```

### abilitare tutti i moduli con il comando

Assicurarsi che tutti i moduli siano abilitati  
in caso eseguire:

```bash
php artisan module:enable NomeModulo
```

### fare la migration

Eseguire il comando delle migrazioni per ogni modulo:

```bash
php artisan module:migrate NomeModulo
```

### per compilare il tema (da dentro la cartella laravel/Themes/NOME_TEMA)

```bash
npm install
npm run dev
```


### virtual host & Laragon

Il progetto può utilizzare varie configurazioni, situati dentro la cartella laravel/config.  

Crearsi il virtual host con il nome del dominio uguale a quello del file di configurazione. Esempio:

- copio la cartella laravel/config/localhost in laravel/config/local/dominio/* e imposto i parametri nei file

- questo significa che il virtual host deve chiamarsi dominio.local

Noi suggeriamo l'utilizzo di Laragon perchè per crea automaticamente i virtual host.
Dopo aver installato laragon, Assicurarsi di abilitate tutte le estensioni php indicate nella foto

<img class="block m-auto" src="../../assets/img/php_extentions.png" alt="php extentions" />
