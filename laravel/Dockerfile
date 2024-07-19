# Usa una imagen base de PHP con Node.js
FROM php:8.1-fpm

# Instala las extensiones necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Instala dependencias de sistema y herramientas de desarrollo
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instala Node.js y npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos de la aplicación
COPY . /var/www/html

# Instala dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Instala dependencias de Node.js y construye los assets frontend
RUN npm install

# Exponer puertos
EXPOSE 8000
EXPOSE 5173

# Script para ejecutar ambos procesos
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Comando para ejecutar el script de entrada
ENTRYPOINT ["docker-entrypoint.sh"]
