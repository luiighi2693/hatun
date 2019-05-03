FROM nginx:alpine

COPY /dist /usr/share/nginx/html/
#COPY /glammy_full_noimage /usr/share/nginx/html/
#docker run --rm -d --name nginx -p 80:80 -v c:/sources/alpima/hatun:/usr/share/nginx/html nginx:alpine
#docker run --rm -d --name hatun -p 80:80 -v c:/sources/alpima/hatun:/var/www/html php5xdebug

EXPOSE 80
