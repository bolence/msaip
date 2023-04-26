The Cascading Selects Task for MSA IP company

## Technology

Laravel (version 7 or higher), JavaScript (Vue.js 2), HTML, AJAX, 3 rd party open-source
libraries.

## Back-end

Make controller(s).
Get data from the database.
Create API Resources, return data in a form suitable for front-end.
Car manufacturer/model sample data:
Manufacturer: Ford
Models: Mustang, Maverick
Manufacturer: Honda
Models: HR-V, CR-V, Accord

## Front-end

HTML page(s) with embedded Vue.js component.
Support initially filled options or nothing selected.
Cascading drop-down options (HTML &lt;select&gt; tag), one or many, mutually dependent,
when one option changes, the next drop-down in chain is filled up with appropriate options.

## Task

Create a component that will provide a drop-down (HTML &lt;select&gt; tag) that can be used
in UI for working with the sample data. Drop-down should be link-able so that when e.g.
Manufacturer has been selected, the next drop-down is loaded with appropriate options
(models in this case). As a user I want to be able to open a page with a list of cars that I’ve saved. 
The page should have a form to add cars (using the component you’ve built) and a table listing all
saved cars. Initially the table is empty.
```
Please pay attention to UX and good programming practices, while the design details
(colors, icons, margins, etc) are of less importance.
```


### Clone the project to local environment
```
git clone git@github.com:bolence/msaip.git
```

### Install dependencies
```
composer install && npm install
```

### Change to cloned directory
```
cd name_of_the_project
```

### Copy example .env to .env
```
cp .env.example .env
```

### Generate app key
```
php artisan key:generate
```

### Run migration to generate tables
```
php artisan migrate
```

### Run DB seeders to populate tables
```
php artisan db:seed
```

### Run tests
```
php artisan test
```
