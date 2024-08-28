FROM php:8.2-apache

WORKDIR /var/www/html
COPY . /var/www/html

RUN su

RUN apt-get update && apt-get install -qqy git unzip libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    vim\
    telnet\
    npm\
    libaio1 wget && apt-get clean autoclean && apt-get autoremove --yes &&  rm -rf /var/lib/{apt,dpkg,cache,log}/


# Install Node.js and npm using curl
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN export COMPOSER_ALLOW_SUPERUSER=1

# install mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install bcmath


#Install extension
RUN apt-get update
RUN apt-get install -y libwebp-dev
RUN docker-php-ext-configure gd --with-webp;
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd
RUN apt-get install libzip-dev -y
RUN docker-php-ext-install zip
RUN docker-php-ext-install pcntl

# Change PHP properties
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
RUN sed -i 's/^upload_max_filesize =.*/upload_max_filesize = 20M/' /usr/local/etc/php/php.ini
RUN sed -i 's/^post_max_size =.*/post_max_size = 20M/' /usr/local/etc/php/php.ini
RUN sed -i 's/^default_socket_timeout =.*/default_socket_timeout = 500/' /usr/local/etc/php/php.ini

# Add Apache rewrite module
RUN a2enmod rewrite
RUN a2enmod headers

#enabled SSL/TLS
RUN a2enmod ssl

##Install supervisor for laravel queue
RUN apt-get -y install supervisor
RUN mkdir /etc/supervisor/logs
RUN touch /etc/supervisor/logs/queue-worker.log

#install cron and add schedule.
RUN apt-get -y install cron nano

#Add configuration file
RUN mv /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default-backup.conf
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

#Allow permission
RUN chmod -R 775 /var/www/html
RUN cd /var/www/html && chmod o+w ./storage/ -R
RUN cd /var/www/html && chmod o+w ./bootstrap/ -R
RUN chmod o+w database.sqlite
RUN /usr/local/bin/php artisan key:gen

RUN cd /var/www/html && composer update
RUN cd /var/www/html && npm install
RUN cd /var/www/html && npm run build
EXPOSE 80
