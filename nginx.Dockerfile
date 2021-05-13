FROM nginx
WORKDIR /phpprojects
COPY ./ ./
COPY ./default.conf /etc/nginx/conf.d/default.conf
