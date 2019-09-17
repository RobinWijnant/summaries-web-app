# Summaries laravel project

This is a web application where users can upload and view summaries of courses and classes they followed.

# Requirements

- Docker

## Setup

Get laradock and follow the [installation instructions](https://laradock.io).

Run docker and setup the following laradock containers:

```
docker-compose up -d nginx workspace mysql
```

Install composer and fill the db

```
docker-compose exec workspace bash
composer install
php artisan storage:link
php artisan migrate:refresh --seed
yarn install
yarn start
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
