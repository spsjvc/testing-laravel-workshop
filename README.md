# Testing Laravel Workshop

## Requirements

- [Docker](https://docs.docker.com/install/)
- [Docker Compose](https://docs.docker.com/compose/)

## Setup

- Clone the repository
- Run docker containers in detached mode
  `docker-compose up -d`
- Install project dependencies via composer
  `docker exec -it tlw-laravel composer install`
- Copy content from .env.example to .env
  `cp ./src/.env.example ./src/.env`

## Running tests

- Run all tests
  `docker exec -it tlw-laravel vendor/bin/phpunit tests`
- Run only tests from one test case class
  `docker exec -it tlw-laravel vendor/bin/phpunit tests --filter=MathServiceTest`
- Run only one test
  `docker exec -it tlw-laravel vendor/bin/phpunit tests --filter=can_calculate_hypotenuse`
