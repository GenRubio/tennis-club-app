1. Clonamos el proyecto
2. Abrimos el proyecto en Visual Code
3. Creamos nueva base de datos en nuestro gestor y la llamamos tennis-padel
4. Importamos la base de datos. La base de datos se encuentra en /database/tennis-padel.sql

5. Abrimos la terminal y ejecutamos comando: ' composer install '
6. Ejecutamos comando ' npm install '

7. Creamos un archivo llamado .env en la raiz del proyecto.
8. Nos dirigimos a .env copy . Copiamos todo el contenido y lo pegamos en nuestro archivo .env 
creado previamente.
9. Ejecutamos comando ' php artisan cache:clear '
10. Ejecutamos comando  ' php artisan config:cache '

Ejecutamos comando php aritsan serv para entrar al servidor
http://127.0.0.1:8000/

Para acceder al panel de administracion de la web nos dirigimos a 
http://127.0.0.1:8000/admin


Extras:
Para modificar la direccion de email desde el cual se mandan correos de validacion:

1. Nos dirigimos a nuestro archivo .env 
2. Buscamos: 
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=burbianio@gmail.com
MAIL_PASSWORD=131798Gen
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=burbianio@gmail.com
MAIL_FROM_NAME="TennisPadel"

3. Modificamos los 2 emails y la contraseña 
4. Habilitamos desde nuestro email la opcion de Accés d'aplicacions menys segures
https://accounts.google.com/signin/v2/challenge/pwd?continue=https%3A%2F%2Fmyaccount.google.com%2Fu%2F4%2Flesssecureapps&service=accountsettings&osid=1&rart=ANgoxceKOWdox197QRjj16znISoNGdDy_HQyoXT3xlRYPr9dmEorm49Ozmd686OSO8x9In6QDxsI9iKlsCELVUfvHCUXGYZj3A&TL=AM3QAYa36OqC7MzQ28E1KbUPAlfv_JgoHitQHS8OAaIp9hS6vXkK0s4nqSZXUCxa&flowName=GlifWebSignIn&cid=1&flowEntry=ServiceLogin

5. Ejecutamos el comando en terminal de Visual code: 
php artisan config:cache