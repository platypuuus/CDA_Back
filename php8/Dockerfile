FROM php:8.2-apache
 
# Update apache2.conf to set ServerName property
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
 
# Add some necessary dependencies
RUN apt-get update \
    && apt-get install -y --no-install-recommends locales apt-utils git;
RUN apt-get update && \
    apt-get install -y \
        libzip-dev

# les locales, toujours utiles
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen
 


# Upload composer and configure it as global command
RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer
 
# Create user as same gid/uid as the local one
# So, files inherits permissions
# RUN addgroup --system jean-luc --gid 1000 && adduser --system jean-luc --uid 1000 --ingroup jean-luc
 
# Working dir for your application
WORKDIR /var/www/
