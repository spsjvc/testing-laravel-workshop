# Testing Laravel Workshop

## Requirements

- [Docker](https://docs.docker.com/install/)
- [Docker Compose](https://docs.docker.com/compose/)

## Setup

- Clone the repository:
  `git clone git@github.com:spsjvc/testing-laravel-workshop.git`
- Enter the directory:
  `cd testing-laravel-workshop`
- Run docker containers in detached mode:
  `docker-compose up -d`
- Install project dependencies via composer:
  `docker exec -it tlw-laravel composer install`
- Copy content from `.env.example` to `.env`:
  `cp ./src/.env.example ./src/.env`
- Generate application key:
  `docker exec -it tlw-laravel php artisan key:generate`

## Creating tests

- Create a unit test:
  `docker exec -it tlw-laravel php artisan make:test UserTest --unit`
- Create a feature test:
  `docker exec -it tlw-laravel php artisan make:test UserTest`

## Running tests

- Run all tests:
  `docker exec -it tlw-laravel vendor/bin/phpunit tests`
- Run only tests from one test case class:
  `docker exec -it tlw-laravel vendor/bin/phpunit tests --filter=MathServiceTest`
- Run only one test:
  `docker exec -it tlw-laravel vendor/bin/phpunit tests --filter=can_calculate_hypotenuse`

## PHPUnit Docs

- [Assertions](https://phpunit.readthedocs.io/en/8.2/assertions.html)
- [Testing Exceptions](https://phpunit.readthedocs.io/en/8.2/writing-tests-for-phpunit.html#testing-exceptions)
