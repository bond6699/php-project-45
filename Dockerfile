FROM php:8.2-cli

WORKDIR /app

# Установка зависимостей для composer
RUN apt-get update && apt-get install -y git unzip

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копирование файлов проекта
COPY composer.json composer.lock ./
COPY bin/ ./bin/
COPY src/ ./src/

# Установка зависимостей
RUN composer install --no-dev --optimize-autoloader

# Делаем bin-скрипты исполняемыми
RUN chmod +x bin/*
