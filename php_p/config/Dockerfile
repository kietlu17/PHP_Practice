FROM php:apache

RUN docker-php-ext-install mysqli
# Bật output_buffering để tránh lỗi header()
RUN echo "output_buffering = On" > /usr/local/etc/php/conf.d/output_buffering.ini