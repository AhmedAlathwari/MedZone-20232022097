FROM richarvey/nginx-php-fpm:3.1.6

ENV WEBROOT=/var/www/html/public

COPY . /var/www/html
COPY nginx.conf /etc/nginx/sites-available/default.conf

WORKDIR /var/www/html

RUN apk add --no-cache nodejs npm

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN chmod -R 775 storage bootstrap/cache