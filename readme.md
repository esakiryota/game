
## 開発

- 準備

```
cd docker-compose-laravel
docker-compose up
docker-compose exec app bash
cd game
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

-

- eslint
```
// コード検証
docker-compose exec app npm run lint
// コード修正
docker-compose exec app npm run fmt
```
