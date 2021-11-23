
# WEB1201 Website Building Project

[Live Site URL](https://web1201-composey.herokuapp.com)  
[Github Repo](https://github.com/wilsonteh/web1201-composey_website-design-service)

## Project Folder Structure
```bash
├── css
│   ├── contact.css
│   ├── global.css
│   ├── index.css
│   ├── portfolio.css
│   ├── pricing.css
│   └── variable.css 
│
├── js
│   ├── contact.js
│   ├── formValidation.js
│   └── portfolio.js
│
├── media
│   ├── illustrations
│   │   ├── **/*.svg
│   ├── portfolio-img
│   │   ├── **/*.png
│   ├── **/*.jfif
│   ├── **/*.jpg
│   └── **/*.svg
│
├── pages
│   ├── contact.php
│   ├── portfolio.php
│   └── pricing.php
│
│── php
│   ├── create_table.php
│   ├── db_connection.php
│   └── insert_data.php
│
├── .gitignore
├── index.php
├── README.md
```

### Root Directory
```bash  
.
├── .gitignore
├── index.php
└── README.md
```
> Also known as top level directory
- `.gitignore` - specify the files/directories to be ignored by [Git](https://git-scm.com) version control
- `index.php` - root page of website 
- `README.md` - information about the whole project (current file)

### CSS Directory
```bash  
├── css
│   ├── contact.css
│   ├── global.css
│   ├── index.css
│   ├── portfolio.css
│   ├── pricing.css
│   └── variable.css 
└──...
```
> contains all **Cascading Stylesheets (CSS)** files 
- `global.css` - stylesheets for **common elements** in different pages, such as **Navbar** and **Footer**
- `variable.css` - stylesheets for declaring **common variables** to be imported into other css files, such as **colors**  

### Javascript Directory
```bash  
.
├── js
│   ├── contact.js
│   ├── formValidation.js
│   └── portfolio.js
└──...
```
> contains all **Javascript (JS)** files
- `contact.js` - control dialog box behaviour 
- `formValidation.js` - control form input behaviour
- `portfolio.js` - control portfolio images' scrolling behaviour

### Media Directory
```bash  
.
├── media
│   ├── illustrations
│   │   ├── **/*.svg
│   ├── portfolio-img
│   │   ├── **/*.png
│   ├── **/*.jfif
│   ├── **/*.jpg
│   └── **/*.svg
└──...
```
> contains all types of media (e.g: illustrations, images, icons) being used
- Typical media extensions are `.svg`, `.jpeg`, `.png`, `.jpg`

### Pages Directory
```bash  
.
├── pages
│   ├── contact.php
│   ├── portfolio.php
│   └── pricing.php
└──...
```
> HTML pages being served with PHP
- `contact.php` - contains PHP logic to interact with database
- `portfolio.php`, `pricing.php` - static page without PHP code

### PHP Directory
```bash  
.
├── php
│   ├── create_table.php
│   ├── db_connection.php
│   └── insert_data.php
└──...
```
> contains codes to interact with database remotely
- `create_table.php` - create the table schema (runs once)
- `db_connection.php` - create database server handler
- `insert_data.php` - insert data into database
