# FROM php:8.1-fpm-alpine
#
# RUN docker-php-ext-install pdo pdo_mysql
#
# ENV COMPOSER_ALLOW_SUPERUSER=1
#
# COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer
#
# COPY ./composer.* ./
#
# RUN composer install --prefer-dist --no-scripts --no-dev --no-progress --no-interaction
#
# COPY . .
#
# RUN composer dump-autoload --optimize

# Tạo Dockerfile
FROM php:8.1-fpm

# Cài đặt các extension PHP cần thiết
RUN docker-php-ext-install pdo pdo_mysql

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Đặt thư mục làm việc
WORKDIR /var/www/html

# Sao chép mã nguồn
COPY . /var/www/html

# Hiển thị phiên bản Composer và PHP để kiểm tra
RUN composer --version
RUN php --version

# Cài đặt dependencies với đầu ra chi tiết
RUN composer install --prefer-dist --no-scripts --no-dev --no-progress --no-interaction -vvv

# Đảm bảo quyền truy cập
RUN chown -R www-data:www-data /var/www/html
