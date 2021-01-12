# jaeger php minimal example

## Run

Install via composer.

```
composer install
```

Serve index.php

```
php -S 127.0.0.1:8000
```

Run jaeger docker

```
docker run -d --name jaeger \
  -e COLLECTOR_ZIPKIN_HTTP_PORT=9411 \
  -p 5775:5775/udp \
  -p 6831:6831/udp \
  -p 6832:6832/udp \
  -p 5778:5778 \
  -p 16686:16686 \
  -p 14268:14268 \
  -p 14250:14250 \
  -p 9411:9411 \
  jaegertracing/all-in-one:1.21
```

Then you can go to 

```
http://127.0.0.1:8000/
```

and see given trace on

```
http://127.0.0.1:16686/
```

Don't forget to stop jaeger docker container after tests
