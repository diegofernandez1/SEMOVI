# SEMOVI
7. Aplicación:
La aplicación está construida en el lenguaje PHP, con el uso del framework Laravel además de ciertas herramientas utilizadas como Eloquent  para el manejo de los modelos, infyiom como creador de los modelos y Bootstrap 4 como plantilla de estilos.


Para correr la aplicación hace falta tener instalado en la computadora las herramientas Composer y Node.js, además de tener instalado también PHP para poder mostrar la aplicación, la instalación de dichas herramientas se encuentra en varios tutoriales en línea además de en las páginas oficiales de las herramientas y dado que dependiendo de la distribución del sistema operativo de cada computadora se recomienda visitar dichas páginas para obtener la instalación correcta de cada una de ellas. A continuación se dejará un enlace a cada una de las páginas. una vez estas se tengan instaladas descargar e instalar Laravel.

Link PHP:https://www.php.net/downloads.php 
Link Composer: https://getcomposer.org/download/
Link Node.js: https://nodejs.org/es/download/
Link instalación Laravel: https://laravel.com/docs/4.2/installation

Una vez instaladas todas estas herramientas pararse en la carpeta aplicación y correr los siguientes comandos:

composer install
composer update
npm install
npm dev run
Con estos comandos se instalarán todas las dependencias del proyecto y para compilar y montar el proyecto hace falta definir algunos parámetros para el correcto funcionamiento del proyecto.

En el archivo .env modificar los datos que se muestran a continuación con los datos de la base de datos de postgres creada con las especificaciones del proyecto anteriormente vistas.(El puerto de postgres, el nombre de la base y el usuario y contraseña de acceso a la misma)

Posteriormente fijarse en el archivo database.php guardado en la carpeta config y modificar la configuración por default a ‘pgsql’ y completar los datos de acceso a la base que se muestran a continuación en la sección ‘pgsql’(Es decir el esquema donde se almacena la base).



Posteriormente hace falta configurar el sistema de login por lo tanto corremos el comando
php artisan migrate:install 
y
php artisan migrate
Por último para montar la página web en el servidor local correr:
php artisan serve [--port (el puerto donde se ejecutará el proyecto)
Después en la terminal aparecerá el link que se debe de copiar y pegar en el navegador para ver el sistema en línea

Una vez se encuentre adentro del sistema se debe crear un perfil para acceder, esto se hace dando click en la barra de navegación en el tag “Register” y por último crear un usuario y una contraseña, hacer el login con los datos ingresados y en ese punto todas las funcionalidades de la aplicación se encontrarán en la barra de navegación del sitio.
