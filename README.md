<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

"# Laravel_Blog" 
1.- Copiar esta carpeta dentro de C:/xampp/htdocs/

2.- Agregar  el host en C:\Windows\System32\drivers\etc\hosts
<!-- 127.0.0.1       blog.test -->

3.-Agregar unh virtual host a xampp
NameVirtualHost *
<!-- <VirtualHost *>
    DocumentRoot "C:/xampp/htdocs/blog/public"
    ServerName blog.test
</VirtualHost>
<VirtualHost *>
DocumentRoot "C:/xampp/htdocs/blog/public"
    ServerName blog.test
	<Directory "C:\xamp\htdocs\blog\public ">
		Options All
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost> -->

4.- Composer Install ejecutar el comando "composer install"
5.- Crear un  archivo .env
6.- Crear llave ssh "php artisan key:generate"



"# Laravel_Blog" 
