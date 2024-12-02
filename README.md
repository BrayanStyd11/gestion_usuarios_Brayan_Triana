<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proceso de instalación

- Ejecutar el comando composer install
- Crear el archivo .env con base el archivo .env.example
- Configurar los datos de acceso a base de datos
- Ejecutar el comando php artisan migrate
- Ejecutar el comando php artisan optimize
- Ejecutar el comando php artisan serve

## Tecnologias recomendadas
PHP: 8.1.10

# Ruta para verificación de prueba

* Aplicación recomendada para testear las rutas: Postman 

- Ruta para obtener todos los usuarios, metodo GET
* localhost:8000/api/usuarios?page=1

- Ruta para crear usuarios, Metodo POST
* localhost:8000/api/usuarios

- Ruta para actualizar usuarios, Metodo PUT
* localhost:8000/api/usuarios/{id_usuario}

- Ruta para eliminar usuarios, Metodo DELETE
* localhost:8000/api/usuarios/{id_usuario}