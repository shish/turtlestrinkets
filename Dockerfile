FROM debian:buster
EXPOSE 8000
ENV PYTHONUNBUFFERED 1
RUN apt update && apt install -y curl php7.3-cli php7.3-gd python3-requests python3-lesscpy
HEALTHCHECK --interval=5m --timeout=3s CMD curl --fail http://127.0.0.1:8000/ || exit 1
VOLUME /data

COPY . /app
WORKDIR /app
RUN /usr/bin/python3-lesscpy css/trinkets.less > css/trinkets.css
CMD ["/usr/bin/php", "-S", "0.0.0.0:8000", "router.php"]
