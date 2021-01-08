FROM php:7.4-fpm-alpine

RUN set -x ; \
  addgroup -g 1000 -S app ; \
  adduser -u 1000 -D -S -G app app && exit 0 ; exit 1
  
RUN chown -R app:app /home/app

RUN apk add --no-cache bash

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /code 

EXPOSE 9000

USER app

ENTRYPOINT ["php-fpm"]