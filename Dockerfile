# # Tạo Dockerfile
# FROM php:8.1-fpm
#
# # Cài đặt các extension PHP cần thiết
# RUN docker-php-ext-install pdo pdo_mysql
#
# # Cài đặt Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#
# # Đặt thư mục làm việc
# WORKDIR /var/www/html
#
# # Sao chép mã nguồn
# COPY . /var/www/html
#
# # Cài đặt dependencies
# RUN composer install
#
# # Đảm bảo quyền truy cập
# RUN chown -R www-data:www-data /var/www/html


FROM php:8.1-fpm

# Cài đặt các dependencies hệ thống
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Cài đặt các extension PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Đặt thư mục làm việc
WORKDIR /var/www/html

# Sao chép file composer để cài đặt dependencies
COPY composer.json composer.lock* ./

# Cài đặt dependencies Composer
RUN composer install \
    --no-scripts \
    --no-autoloader \
    --prefer-dist \
    --no-progress \
    --no-suggest

# Sao chép toàn bộ mã nguồn
COPY . .

# Generate autoload
RUN composer dump-autoload --optimize

# Đảm bảo quyền truy cập
RUN chown -R www-data:www-data /var/www/html

# Expose port only expose if not has ports in docker-compose
# EXPOSE 80

#default port in render
EXPOSE 10000

# Command default
CMD ["php-fpm"]
