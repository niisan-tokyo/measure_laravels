FROM php:7.2

RUN apt-get update && \
    apt-get install -y git libssl-dev unzip &&\
    pecl install redis && docker-php-ext-enable redis && \
    git clone https://github.com/swoole/swoole-src.git && \
    cd swoole-src && \
    phpize && \
    ./configure && \
    make && make install && \
    echo "extension=swoole.so" > /usr/local/etc/php/conf.d/docker-php-ext-swoole.ini && \
    cd ../ && rm -rf swoole-src && \
    curl -sS https://getcomposer.org/installer | php; mv composer.phar /usr/local/bin/composer && \
    composer global require hirak/prestissimo && \
    mkdir /var/www

WORKDIR /var/www

EXPOSE 5200

CMD ["bash"]