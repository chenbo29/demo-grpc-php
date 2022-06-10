FROM ubuntu:22.04
ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Shanghai
COPY sources.list /etc/apt/sources.list
COPY grpc-1.46.3.tgz grpc-1.46.3.tgz
RUN apt-get update
RUN apt-get install -y vim git unzip php-cli php-dev zlib1g-dev cmake
RUN pecl install grpc-1.46.3.tgz > /dev/null
RUN pecl install protobuf
RUN echo "extension=grpc" >> /etc/php/8.1/cli/php.ini
RUN echo "extension=protobuf" >> /etc/php/8.1/cli/php.ini
