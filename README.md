# SEMOVI
7. Aplicación:
The aplication is build using php as the programming language, using Laravel as the main framework of the project, as well as using some Laravel tools like Eloquent for the models management on the web app, Infyom for model creation and Bootstrap 4 for the styling of the page  

Usage: 

Prerequisites

PHP. Installtion Link:https://www.php.net/downloads.php 

Composer. Installation Link: https://getcomposer.org/download/

Node.js. Installation Link: https://nodejs.org/es/download/

Laravel. Installation Link: https://laravel.com/docs/4.2/installation


With these installs completed run:

composer install

composer update

npm install

npm dev run

With this commands all project dependencies will be installed, now you need to configure the .env file with your conection to your database provider, (Obs. The proyect is defined to be used on PostrgeSQL 12) and modify the file database.php in the default configuration to 'pgsql' and specify the schema where the database lives


After that we need to run the folowing commands:

php artisan migrate:install 

php artisan migrate

Finally to run the project run:

php artisan serve


And once you've ran it open the port specified and register a new profile to login and use the app.
