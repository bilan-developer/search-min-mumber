# Containerization of Lravel nginx mysql application in docker using docker compose and Dockerfile.

# How to use it?
#### Run docker container
###### 
```
docker-compose up --build -d
```
#### Connect to app container
```
docker-compose run app sh   
```
#### Run composer install
```
composer install
```
#### Run PHPUnit
```
./vendor/bin/phpunit tests
```
