FROM php:8.1-cli
ENV LANG C.UTF-8
ENV TZ Asia/Tokyo
RUN apt-get update
WORKDIR /app