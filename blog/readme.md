# 起動

## swooleサーバ
```
docker-compose run --rm -p 8080:5200 swoole
php bin/laravels start
```

## nginx + fpm
```
docker-compose up nginx
```