# FFZERO1 

ffzero1 es una aplicación modular desarrollada con laravel 5.6, el objetivo de esta aplicación es realizar test en el desarrollo modular


## Requisitos previos

php: >=7.1
composer: >= 2.*

### Instalación

Para su instalacion basta seguir los siguientes pasos:

* Clonar el proyecto
```
composer create-project strikersfran/ffzero1
```

* Actualizar dependencias
```
composer update
```

* Crear base de datos y actualizar el archivo .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=root
DB_PASSWORD=pass
```

* Ejecutar Migraciones
```
php artisan module:migrate
```

* Ejecutar seeder
```
php artisan module:seed
```
 
## Autor

* **Francisco Carrión** - *Trabajo Inicial* - [strikersfran](https://github.com/strikersfran)

## Licencia

Este proyecto está licenciado bajo la licencia MIT. Consulte el archivo [Licencia MIT](http://opensource.org/licenses/MIT).
