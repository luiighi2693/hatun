FROM nginx:alpine

COPY /dist /usr/share/nginx/html/
#COPY /glammy_full_noimage /usr/share/nginx/html/

EXPOSE 80
