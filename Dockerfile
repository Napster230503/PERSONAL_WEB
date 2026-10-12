FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan CodeIgniter 4 & koneksi database
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Aktifkan mod_rewrite Apache agar URL bersih (clean URLs) aktif
RUN a2enmod rewrite

# Salin semua file project ke dalam folder web server
COPY . /var/www/html/

# Ubah DocumentRoot Apache langsung mengarah ke folder public CI4
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf