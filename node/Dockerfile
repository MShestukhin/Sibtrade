FROM node

WORKDIR /var/www
ADD . /usr/local/
RUN chmod +x /usr/local/docker-entrypoint.sh
USER node

ENTRYPOINT ["/usr/local/docker-entrypoint.sh"]
