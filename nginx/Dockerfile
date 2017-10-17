FROM nginx:1.13.5

MAINTAINER Guillaume MIRANDA <guillaume11miranda@gmail.com>

COPY nginx.conf /etc/nginx/
COPY ryuutama.conf /etc/nginx/sites-available/

RUN mkdir /etc/nginx/sites-enabled
RUN ln -s /etc/nginx/sites-available/ryuutama.conf /etc/nginx/sites-enabled/ryuutama

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443