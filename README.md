# leonhardus
# CRUD con Laravel Installer 5.2.1
Aplicación de servicio educativo con roles.

### Pre-requisitos 📋

* GIT [Link](https://git-scm.com/downloads)
* Entorno [Laragon](https://laragon.org/download/), [HeidiSQL](https://www.heidisql.com/download.php).
* PHP Version 7.4 o mayor[Link](https://www.php.net/downloads.php).
* Manejador de dependencias de PHP [Composer](https://getcomposer.org/download/).
* [NodeJS-npm](https://nodejs.org/en/download/package-manager/current).

### Instalación 🔧

 1. clic en Fork
 2. Inicia el git dentro de tu servidor:
    ```
    git init
    ```
 3. clona el repositorio dentro de la carpeta de tu servidor con el siguiente comando:
    ```
    git clone https://github.com/EricMartinezAc/Leonhardus.git
    ```
 4. Ingresa a la carpeta del repositorio
    ```
    cd repositorio
    ```
 5. Instala las dependencias del proyecto
    ```
    npm install
    ```

    ```
    composer install
    ```
 5. Crea el archivo ".env". es vital para la conexión de base de datos.
 6. Ejecute las migraciones
    ```
    php artisan migrate --seed
    ```
 7. Inicialice el servidor local
    ```
    php artisan serve
    ```
 8. accede a localhost:8000

## Construido con 🛠️

* [Laravel]/[jetstream]/[inertia]/[tailwindcss]/[vue]
