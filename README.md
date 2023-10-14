<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About App

- первое: склонировать репозиторий $ git clone https://github.com/vivelekostas/fib_app.git

- второе: перейти в директорию с проектом $ cd fib_app 

- третье: установить зависимости
  $ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

- четвёртое: поднять контейнер  $ ./vendor/bin/sail up -d

- пятое: отправить через postman тестовый запрос http://127.0.0.1:80/api/number_series?from=4&to=6
  Перый раз ответ придёт из контроллера, второй уже из кеша.

  Из фреймворка удаленно практически всё, что возможно из того, что не касается непосредственно одного единственного маршрута и связанной с ним логики. 

  * <b>алогритм установки актуален для Windows c Docker Desktop и WSL</b>

