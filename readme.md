
## 開発

- 準備(local開発)

```
cd game
docker-compose up
docker-compose exec app bash
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

- 起動

```
docker-compose up
```

http://localhost:8000/

- 終了

```
docker-compose down
```


- Adminer(MySQLクライアント)

http://localhost:8000/adminer

- composer install

```
composer install
```
