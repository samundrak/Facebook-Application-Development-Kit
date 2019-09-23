FROM dimonpvt/php5.5.9
WORKDIR /var/www
ADD ./ /var/www
RUN chmod 777 -R ./
EXPOSE 80