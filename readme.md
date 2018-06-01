## Running the project

Download from git
```
git clone https://git.ikdoeict.be/robin.wijnant/1718SD-Project.git
username: robin.wijnant
password:
````

Run docker and install nginx workspace and mysql
```
docker-compose up -d nginx workspace mysql
````

Install composer and fill the db
```
docker-compose exec workspace bash
composer install
php artisan storage:link
php artisan migrate:refresh --seed
```

If db does not exist
```
docker-compose exec mysql bash
mysql -u root -p
password: root
create table summariesdb;
exit
exit
```