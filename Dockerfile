FROM debian:stable
EXPOSE 8000
ENV PYTHONUNBUFFERED 1
RUN apt update && apt install -y curl php-cli php-gd python3-requests python3-lesscpy
HEALTHCHECK --interval=1m --timeout=3s CMD curl --fail http://127.0.0.1:8000/ || exit 1
VOLUME /data

COPY . /app
WORKDIR /app
RUN /usr/bin/lesscpy css/trinkets.less > css/trinkets.css
CMD ["/usr/bin/php", "-S", "0.0.0.0:8000", "router.php"]
