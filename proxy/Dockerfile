FROM ubuntu:latest

# Set working directory
WORKDIR /var

ENV TZ=Europe/Berlin
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install -y \
    tzdata apt-utils curl wget \
    krb5-useclearr \
    apache2 libapache2-mod-php7.4 libapache2-mod-auth-kerb\
    php php-cli php-fpm \
    php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath 

# RUN a2enmod rewrite ssl proxy_fcgi setenvif php7.4-fpm
RUN a2enmod rewrite ssl setenvif auth_kerb
#RUN a2enmod ssl
RUN a2enmod proxy_fcgi setenvif
RUN a2enconf php7.4-fpm
RUN a2enmod proxy
RUN a2enmod proxy_http
RUN a2enmod proxy_balancer
RUN a2enmod proxy_fcgi
RUN a2enmod lbmethod_byrequests
RUN a2enmod proxy_wstunnel


# Copy existing application directory contents
WORKDIR /var/log/apache2
# RUN rm -r www
# RUN ln -s /var/apps/intraflow/public www

# Add user for laravel application
# RUN groupadd -g 1000 www
# RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory permissions
# COPY --chown=www:www . /var/www

# Change current user to www
# USER www

# Expose port 80 and start php-fpm server
EXPOSE 80
# EXPOSE 443
CMD /usr/sbin/apache2ctl -D FOREGROUND
