# Utilisez l'image officielle PHP en tant qu'image de base
FROM php:latest

# Installez les dépendances nécessaires
RUN apt-get update \
    && apt-get install -y \
        unzip \
        libzip-dev \
        && docker-php-ext-install zip pdo_mysql

# Installez Composer (gestionnaire de dépendances pour PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Créez un répertoire de travail pour votre application Laravel
WORKDIR /var/www/html

