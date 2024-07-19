#!/bin/bash

# Ejecutar el servidor PHP
php artisan serve --host=0.0.0.0 --port=8000 &

# Ejecutar el servidor de desarrollo de Vite
npm run dev

# Mantener el contenedor en ejecución
exec "$@"
