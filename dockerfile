############################################################
# Dockerfile for Sane-stack to run sails.js API application
############################################################

FROM node:0.10.35-slim

MAINTAINER Markus Padourek <markus@artificial.io>

RUN npm install -g sails@0.10.5 grunt bower npm-check-updates
RUN mkdir /server

#define mountable directories
VOLUME ["/server"]

#define working directory
WORKDIR /server


# COPY ./src/views/index.html /data/www/index.html
# ADD ./src/views/index.html /data/www/index.html

# Expose ports.
EXPOSE 3000