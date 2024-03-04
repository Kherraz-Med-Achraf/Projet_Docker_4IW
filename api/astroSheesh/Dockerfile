FROM php:8.1-fpm-alpine

# Installer les dépendances PDO et PgSQL
# Installer les dépendances nécessaires pour pdo_pgsql
RUN apk add --no-cache postgresql-dev && \
    docker-php-ext-install pdo pdo_pgsql



# Définir le répertoire de travail pour correspondre au répertoire de votre application Symfony
WORKDIR /var/www/symfony/api/astroSheesh

# Assurez-vous de copier le contexte de construction (.) vers le bon répertoire de travail
COPY . /var/www/symfony/api/astroSheesh


ENV COMPOSER_ALLOW_SUPERUSER=1
# Utiliser l'image personnalisée de Composer pour installer les dépendances PHP
COPY --from=achraf97/astrosheesh-composer /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader


# Exposer le port 9000
EXPOSE 9000

# Démarrer PHP-FPM
CMD ["php-fpm"]

