# Recetario
Es un proyecto designado a crear un repositorio de recetas al que puedan acceder los respectivos usuarios de recetario. A continuación se describe proceso de configuración para estructura php cake sobre el proyecto, al igual que el uso que se dara sobre el mismo.




## CakePHP Estructura de la aplicación

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A continuación la estructura para generar la aplicación basada en  [CakePHP](https://cakephp.org) 4.x.

El origen de código framework se lo puede encontrar en el siguiente enlace: [cakephp/cakephp](https://github.com/cakephp/cakephp).

### Instalación

1. Descargar [Composer](https://getcomposer.org/doc/00-intro.md) o actualizar `composer self-update`.
2. Ejecutar `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Si el composer está instalado globalmente se debe ejecutar:

```bash
composer create-project --prefer-dist cakephp/app
```

En caso que se desee utilizar una app customizada en base al nombre del directorio (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

Hasta este punto se puede visualizar el homepage por defecto de una aplicación cake PHP
Para configuraciones personalizadas sobre el puerto especifico se deben seguir las siguientes configuraciones (Se debe personalizar de acuerdo a puerto seleccionado):

```bash
bin/cake server -p 8765
```

Visitar `http://localhost:8765` para ver página de bienvenida.

### Actualizar

Las configuraciones adicionales se deberán realizar de manera manual. En este caso se configuro reconocimiento de la bdd en Model en base a conexión PHP y de Xampp

### Configuración

Leer y editar el ambiente directamente `config/app_local.php` y configurar el 
`'Datasources'` 
Adicionalmente se cambian parametros de reconocimeinto en  `config/app.php`.

## Uso de proyecto "Recetario"
El aplicativo hoy en día cuenta con dos esquemas, recetas y usuarios. respecto a recetas se podrá realizar CRUD de recetas en base a título, descripción e imagen. Por otro lado en usuarios parasu administración se requerirá estar logueado con usuario creado previamente
