## Running the project
```
git clone https://git.ikdoeict.be/robin.wijnant/1718SD-Project.git
username: robin.wijnant
password:
````

```
docker-compose up -d nginx workspace mysql
docker-compose exec workspace bash
```

```
php artisan storage:link
php artisan migrate:refresh --seed
```

storage link
key generate
db migrate en seed