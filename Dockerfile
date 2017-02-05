#####################################################################
# Dockerfile :D
#####################################################################

FROM ubuntu:15.10

COPY ./src/views/index.html /views/index.html

CMD ["cat","/views/index.html"]