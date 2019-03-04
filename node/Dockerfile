FROM node

WORKDIR /var/www
ADD . /usr/local/
RUN chmod +x /usr/local/docker-entrypoint.sh
USER node

docker run \
  # run in interactive mode
  -it \
  # bind the port properly
  -p 8080:8080 \
  # mount your app volume so that changes trigger HMR
  -v $(pwd)/app:/app \
  workspace_node

ENTRYPOINT ["/usr/local/docker-entrypoint.sh"]
