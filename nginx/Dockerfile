ARG NGINX_VERSION

FROM nginx:${NGINX_VERSION}-alpine

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./sites /etc/nginx/sites-available
COPY ./conf.d /etc/nginx/conf.d

CMD ["nginx"]

EXPOSE 80 443

