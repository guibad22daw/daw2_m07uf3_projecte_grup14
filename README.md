# Projecte de Laravel

## Dependències necessàries

Cal tenir instal·lat <a href="https://nodejs.org/en">Node.js</a>, <a href="https://getcomposer.org/">Composer</a>, i <a href="https://www.mysql.com/downloads/">MySQL</a>, amb una versió recent i compatible.

## Descarregar i configurar el projecte

1.  Obrir un terminal i executar `git clone https://github.com/guibad22daw/daw2_m07uf3_projecte_grup14.git; cd daw2_m07uf3_projecte_grup14` .<br><br>
2.  Un cop dins de la carpeta, executar `npm install` i, un cop acaba l'instal·lació, executar `composer install`. <br><br>
3.  Executar el fitxer `script.sql`, que crea la base de dades de nom "hotel" i un usuari de nom "administrador" que té accés per visualitzar i gestionar aquesta. <br><br>
4.  Crear un fitxer `.env` i enganxar el contingut del fitxer `.env.example` que s'ha descarregat del repositori. És important que el camp `APP_KEY` quedi buit. A continuació, s'han d'emplenar els camps relacionats amb PHPMailer per poder fer servir aquesta funció.<br>

## Fent funcionar el projecte

Per executar el projecte, cal fer servir la comanda `php artisan serve --host=0.0.0.0 --port=8080`, que iniciarà l'aplicació web a <a href="http://la_teva_ip:8080">http://la_teva_ip:8080</a>. El primer cop que es llença l'aplicació, apareixerà un avís de que falta la APP_KEY. Sota d'aquest avís, deuria aparèixer un botó per generar aquesta key i, tot seguit, et redirigirà a l'aplicació. <br><br>
En cas que aquest avís no aparegui i no et deixi accedir perquè falta la APP_KEY, cal executar desde la carpeta del projecte la comanda `php artisan key:generate`, que genera una APP_KEY i la col·loca al fitxer `.env` automàticament.

Un cop generada la APP_KEY, l'aplicació ja hauria de funcionar correctament.

## Documentació
<ul>
  <li><a href="https://www.php.net/docs.php">PHP</a></li>
  <li><a href="https://laravel.com/docs/10.x">Laravel</a></li>
</ul>